<!doctype html>
<html lang="{{app()->currentLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
@vite('resources/css/app.css')
<body>
<h1 class="m-24 text-2xl">Học viên</h1>
<div class="h-10">
    <a class=" mr-24 ml-24 text-white border rounded bg-green-300 hover:bg-green-400 cursor-pointer p-2 ">Thêm sinh
        viên</a>
</div>
@if($students->isEmpty())
    <a class="text-3xl mr-24 ml-24">Chưa có học viên</a>
@else
    <table class="ml-20 mr-20 w-1/2 border text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                ID
            </th>
            <th scope="col" class="px-6 py-3">
               Tên sinh viên
            </th>
            <td></td>
        </tr>
        </thead>

        <tbody>

        @foreach($students as $student)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $student['id']}}
                </th>
                <td>
                    {{ $student['full_name']}}
                </td>
                <td>
                    <a class="rounded  cursor-pointer hover:bg-blue-400 text-white bg-blue-300 p-2">Sửa</a>
                    <a class="rounded cursor-pointer hover:bg-red-400 text-white bg-red-300 p-2">Xoá</a>
                </td>
            </tr>

        @endforeach
        </tbody>

    </table>
@endif

<h1 class="mr-24 ml-24 text-2xl">Các lớp học</h1>
<div class="h-10">
    <a class=" mr-24 ml-24 text-white border rounded bg-green-300 hover:bg-green-400 cursor-pointer p-2 ">Thêm lớp
        học</a>
</div>
@if($classrooms->isEmpty())
    <a class="text-3xl mr-24 ml-24">Chưa có lớp học</a>
@else
    <table class="ml-20 mr-20 w-auto border text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                ID
            </th>
            <th scope="col" class="px-6 py-3">
                Mã lớp
            </th>
            <th scope="col" class="px-6 py-3">
                Tên lớp
            </th>
            <th scope="col" class="px-6 py-3">
                Thời gian mở
            </th>
            <th scope="col" class="px-6 py-3">
                Thời gian đóng
            </th>
            <td></td>

        </tr>
        </thead>

        <tbody>
        @foreach($classrooms as $classroom)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $classroom['id']}}
                </th>
                <td>
                    {{ $classroom['code']}}
                </td>
                <td>
                    {{ $classroom['title']}}
                </td>
                <td>
                    {{ \Carbon\Carbon::parse($classroom['opened_at'])->format('d-m-Y')}}
                </td>
                <td>
                    {{ \Carbon\Carbon::parse($classroom['closed_at'])->format('d-m-Y') }}
                </td>
                <td>
                    <a class="rounded  cursor-pointer hover:bg-blue-400 text-white bg-blue-300 p-2">Sửa</a>
                    <a class="rounded cursor-pointer hover:bg-red-400 text-white bg-red-300 p-2">Xoá</a>
                </td>
            </tr>
        @endforeach
        </tbody>


    </table>
@endif

<h1 class="mr-24 ml-24 text-2xl">Các giáo viên</h1>
<div class="h-10">
    <a class=" mr-24 ml-24 text-white border rounded bg-green-300 hover:bg-green-400 cursor-pointer p-2 ">Thêm giáo
        viên</a>
</div>
@if($teachers->isEmpty())
    <a class="text-3xl mr-24 ml-24">Chưa có giáo viên</a>
@else
    <table class="ml-20 mr-20 w-auto border text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                ID
            </th>
            <th scope="col" class="px-6 py-3">
                Tên giáo viên
            </th>
            <th scope="col" class="px-6 py-3">
                Lớp dạy
            </th>
            <th scope="col" class="px-6 py-3">
            </th>
        </tr>
        </thead>

        <tbody>
        @foreach($teachers as $teacher)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $teacher['id']}}
                </th>
                <td>
                    {{ $teacher['full_name']}}
                </td>
                <td>
                    {{ empty($teacher['title'])? 'Chưa nhận': $teacher['title'] }}
                </td>
                <td>
                    <a class="rounded  cursor-pointer hover:bg-blue-400 text-white bg-blue-300 p-2">Sửa</a>
                    <a class="rounded cursor-pointer hover:bg-red-400 text-white bg-red-300 p-2">Xoá</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endif

</body>
</html>
