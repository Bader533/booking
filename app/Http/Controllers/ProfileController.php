<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function changeInfo(Request $request)
    {

        $validator = Validator($request->all(), [
            'avatar' => 'mimes:jpg,png,jpeg',
            'name' => 'required | string | min:3 | max:40',
            'email' => 'required | string',
            'phone' => 'required | numeric',
        ], [
            'avatar.mimes' => 'الصورة يجب ان تكون jpg,png,jpeg .',

            'name.required' => 'الاسم مطلوب .',
            'name.string' => 'يجب ان يكون الاسم نص .',
            'name.min' => 'يجب ان يكون الاسم على اكبر من 3 احرف .',
            'name.max' => 'يجب ألا يكون الاسم أكبر من 40 الأحرف .',

            'email.required' => 'ايميل مطلوب .',
            'email.string' => 'يجب ان يكون ايميل نص .',

            'phone.required' => 'رقم الهاتف مطلوب .',
            'phone.numeric' => 'يجب ان يكون رقم الهاتف رقم .',
        ]);

        if (!$validator->fails()) {
            $user = User::where('id', auth()->user()->id)->first();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->phone = $request->input('phone');
            $isSaved = $user->save();

            //images
            if ($request->hasFile('avatar') && $isSaved) {
                if ($user->images->isNotEmpty()) {
                    if (File::exists($user->images->first()->url)) {
                        File::delete($user->images->first()->url);
                        $user->images->first()->delete();
                    }
                }
                saveNewImage($request->avatar, 'images/user', $user);
            }

            return response()->json(
                [
                    'message' => $isSaved ? __('site.saved_successfully') : __('site.failed_to_save')
                ],
                $isSaved ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST
            );
        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], Response::HTTP_BAD_REQUEST);
        }
    }

    public function changePassword(Request $request)
    {

        $validator = Validator($request->all(), [
            'password' => ['required', 'string', 'min:8'],
            'password_confirmation' => ['required', 'string', 'min:8', 'same:password'],
        ], [
            'password.required' => 'كلمة السر مطلوب .',
            'password.confirmed' => 'يجب ان تكون كلمة السر موكدة .',
            'password.min' => 'يجب ان تكون كلمة السر اكثر من 8 حروف .',

            'password_confirmation.required' => 'تاكيد كلمة السر مطلوب',
            'password_confirmation.min' => 'يجب ان تكون كلمة السر اكثر من 8 حروف .',
            'password_confirmation.same' => 'يجب ان تكون تاكيد كلمة السر نفس كلمة المرور .',
        ]);

        if (!$validator->fails()) {
            $user = User::where('id', auth()->user()->id)->first();
            $user->password = Hash::make($request->input('password'));
            $isSaved = $user->save();

            return response()->json(
                [
                    'message' => $isSaved ? __('site.saved_successfully') : __('site.failed_to_save')
                ],
                $isSaved ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST
            );
        } else {
            return response()->json(['message' => $validator->getMessageBag()], Response::HTTP_BAD_REQUEST);
        }
    }
}
