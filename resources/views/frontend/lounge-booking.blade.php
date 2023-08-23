<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container {
            width: 100%;
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            flex-wrap: wrap;
            position: relative;
            max-height: 200px;
            height: auto;
            overflow-y: auto;
            margin-top: 10px;
        }

        .container .image {
            width: 85px;
            height: 85px;
            border-radius: 5px;
            box-shadow: 0 05px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            margin-right: 15px;
            position: relative;
            margin-bottom: 8px;
        }

        .container .image:nth-child(4n) {
            margin-top: 0;
        }

        .container .image img {
            width: 100%;
            height: 100%;
        }

        .container .image span {
            position: absolute;
            top: -2px;
            right: 9px;
            font-size: 20px;
            cursor: pointer;
        }

        .container .image span:hover {
            opacity: 0.8;
        }
    </style>
</head>

<body>

    {{-- <div class="dragover"> --}}
    {{-- <span class="inner">
            {{ __('site.upload_images') }}
            <span class="selectdd" role="button">{{ __('site.browse') }}</span>
        </span> --}}
    <span class="selectdd" role="button">{{ __('site.browse') }}</span>
    <input name="images[]" type="file" class="file" multiple />
    {{-- </div> --}}
    {{-- end building images --}}
    <div class="container">
    </div>

    <script>
        let files = [],
            // button = document.querySelector(".top button"),
            form = document.querySelector("form"),
            container = document.querySelector(".container");
        text = document.querySelector(".inner");
        browse = document.querySelector(".selectdd");
        input = document.querySelector(".file");
        let images = [];

        browse.addEventListener("click", () => input.click());

        input.addEventListener("change", () => {
            let file = input.files;
            for (let i = 0; i < file.length; i++) {
                if (files.every((e) => e.name != file[i].name)) files.push(file[i]);
                images.push(file[i]);
            }
            // form.reset();
            showImages();
        });

        const showImages = () => {
            let images = "";
            files.forEach((e, i) => {
                images += `<div class="image">
                    <img src="${URL.createObjectURL(e)}" alt="image">
                    <span onclick="delImage(${i})"><i class='fa fa-trash' style='color: red;font-size:16px'></i></span>
                </div>`;
            });
            container.innerHTML = images;
        };

        const delImage = (index) => {
            delete files[index];
            images.splice(index);
            console.log(index);
            showImages();
        };
    </script>
</body>

</html>
