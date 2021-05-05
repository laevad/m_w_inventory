<!--Javascript-->
<script src="bootstrap%20files/js/jquery-3.4.1.slim.min.js"></script>
<script src="bootstrap%20files/js/popper.min.js"></script>
<script src="bootstrap%20files/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
<script>
    function showMsg(varName)
    {
        $("."+varName).fadeIn('slow', function () {
            $(this).delay(3200).fadeOut('slow');
        });
    }
    showMsg('pop-error');
</script>
</html>
