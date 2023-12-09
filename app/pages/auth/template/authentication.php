<html>
<head>
    <title>
        Authentication
    </title>
    <script
        src="https://code.jquery.com/jquery-2.2.4.js"
        integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>
    <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"
            integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer">
    </script>
    <script src="/attesttation/project/pages/auth/scripts/auth.js"></script>
    <script src="/attesttation/project/pages/additional-methods.js"></script>
</head>
<body style="margin: auto;width: 50%">
    <div style="margin: auto;width: 50%">
        <div>
            <span>Please login in </span>
        </div>
        <form id="auth">
            <div>
                <input style="margin-top: 7px" type="text" name="username" placeholder="Username">
            </div>
            <!--
            <input type="text" name="email">-->
            <div>
                <input style="margin-top: 7px" type="password" name="password"  placeholder="Password">
            </div>
            <div>
                <input style="margin-top: 7px" type="submit">
            </div>
        </form>
        <a href="index.php?page=authentication&phase=signupForm"> Sign up here </a>
    </div>
</body>
</html>

