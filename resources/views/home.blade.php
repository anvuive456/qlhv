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
<div class="bg-gray-100 h-screen w-full flex flex-col items-center">
    <div class="m-auto w-1/2 h-1/2 rounded-2xl border-2 bg-white flex flex-col items-center">
        <h3 class="text-3xl mt-10">Đăng nhập</h3>
        <form class="flex flex-col justify-center w-1/2 mt-10 " method="POST" action="/login">
            @csrf
            @method('POST')
            <label for="type">Đăng nhập với vai trò: </label>
            <select
                class="g-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                id="type" name="type">
                <option value="admin">Admin</option>
                <option value="teacher">Giáo viên</option>
                <option value="student">Sinh viên</option>
            </select>
            <label for="username">
                Tên đăng nhập(username):
            </label>
            <input
                class="g-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                id="username" name="username" type="text"/>
            <label for="password">
                Mật khẩu(password):
            </label>
            <input
                class="g-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                id="password" name="password" type="password"/>
            <input
                class="mt-10 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded "
                type="submit" value="Đăng nhập"/>
        </form>
    </div>
</div>
</body>
</html>
