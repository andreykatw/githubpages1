<html>
<head>
    <title>Таблица пользователей</title>
    <script
            src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous">
    </script>
    <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"
            integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer">
    </script>
    <script src="pages/users/scripts/users.js"></script>
    <script src="pages/additional-methods.js"></script>
    <link rel="stylesheet" href="pages/users/styles/users.css">
</head>
<body>
    <div style="margin: auto;width: 50%">
    <?php
        include 'header.php';
    ?>
    <table style="width: 100%">
        <thead>
            <th> Имя пользователя</th>
        </thead>
        <tbody id="users_tablebody">
        <tr>
           <td>
               Currently loads
           </td>
        </tr>
        </tbody>
    </table>

    </div>
</body>
</html>

