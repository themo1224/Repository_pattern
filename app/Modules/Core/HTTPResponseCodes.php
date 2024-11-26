<?php

declare(strict_types=1);

namespace App\Modules\Core;

abstract class HTTPResponseCodes
{
    const Success = [
        "title" => "موفق",
        'code' => 200,
        'message' => 'درخواست با موفقیت پردازش شد .'
    ];
    const NotFound = [
        "title" => "یافت نشد",
        'code' => 404,
        'message' => 'مورد درخواست شده پیدا نشد.'
    ];
    const InvalidArgument = [
        "title" => "پارامتر نامعتبر",
        'code' => 400,
        'message' => 'پارامترهای ارسال شده معتبر نیستند.'
    ];

    const BadRequest = [
        "title" => "درخواست نامعتبر",
        'code' => 400,
        'message' => 'درخواست ارسال شده صحیح نیست.'
    ];
}
