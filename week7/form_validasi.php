<!DOCTYPE html>
<html>
    <head>
        <title>Form Input dengan Validasi</title>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    </head>
    <body>
        <h2>Form Input dengan Validasi</h2>
        <form id="myForm" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama">
            <span id="nama-error" style="color: red;"></span><br>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
            <span id="email-error" style="color: red;"></span><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <span id="password-error" style="color: red;"></span><br>

            <input type="submit" value="Submit">
        </form>

        <div id="hasil"></div>

        <script>
            $(document).ready(function() {
                $("#myForm").submit(function(event) {
                    event.preventDefault();

                    var nama = $("#nama").val();
                    var email = $("#email").val();
                    var password = $("#password").val();
                    var valid = true;

                    $("#nama-error").text("");
                    $("#email-error").text("");
                    $("#password-error").text("");

                    if (nama === "") {
                        $("#nama-error").text("Nama harus diisi.");
                        valid = false;
                    }

                    if (email === "") {
                        $("#email-error").text("Email harus diisi.");
                        valid = false;
                    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                        $("#email-error").text("Format email tidak valid.");
                        valid = false;
                    }

                    if (password.length < 8) {
                        $("#password-error").text("Password harus minimal 8 karakter.");
                        valid = false;
                    }

                    if (valid) {
                        var formData = $("#myForm").serialize();

                        $.ajax({
                            url: "proses_validasi.php",
                            type: "POST",
                            data: formData,
                            success: function(response) {
                                $("#hasil").html(response);
                            }
                        });  
                    }
                });
            });
        </script>
    </body>
</html>