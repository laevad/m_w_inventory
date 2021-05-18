<footer class="page-footer font-small">
    <div class="footer-copyright text-center  text-white" style="background-color: #349721;">&copy; 2021 Copyright:
        <a href="#" class="text-light">Al Dave's Group</a>
    </div>
</footer>
</div>
<script src="{{ asset('bootstrap files/js/jquery-3.4.1.slim.min.js') }}"></script>
<script src="{{ asset('bootstrap files/js/popper.min.js') }}"></script>
<script src="{{ asset('bootstrap files/js/bootstrap.min.js') }}"></script>

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
