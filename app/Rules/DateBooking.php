<?php

namespace App\Rules;

use App\Models\Booking;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class DateBooking implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */

    protected $loungeId;
    protected $bookingId;

    public function __construct($loungeId, $bookingId)
    {
        $this->loungeId = $loungeId;
        $this->bookingId = $bookingId;
    }
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $dates = explode(" - ", $value);
        $startDate = date("Y-m-d", strtotime($dates[0]));
        $endDate = date("Y-m-d", strtotime($dates[1]));

        $booking = Booking::where('lounge_id', $this->loungeId)->whereBetween('start_date', [$startDate, $endDate])
            ->orWhereBetween('end_date', [$startDate, $endDate])->first();

        if ($this->bookingId == null) {
            if ($booking != null) {
                $fail(__('site.date_is_booking'));
            }
        } else {

            if ($booking != null && $booking->id == $this->bookingId) {
                true;
            } else {
                $fail(__('site.date_is_booking'));
            }
        }
    }
}
