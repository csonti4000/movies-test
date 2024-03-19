<!-- Footer-->
<footer class="border-top">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="small text-center text-muted fst-italic">Copyright &copy; Reon Digital 2024</div>
            </div>
            <div class="icons mt-5 row justify-content-center">
                <div class="col-1">
                    <i class="fa-brands fa-facebook-f" style="color: #fff; background-color: #000; padding: 15px; width: 20px; height: 20px; border-radius: 50%"></i>
                </div>
                <div class="col-1">
                    <i class="fa-brands fa-twitter" style="color: #fff; background-color: #000; padding: 15px; width: 20px; height: 20px; border-radius: 50%"></i>
                </div>
                <div class="col-1">
                    <i class="fa-brands fa-instagram" style="color: #fff; background-color: #000; padding: 15px; width: 20px; height: 20px; border-radius: 50%"></i>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{ URL::asset('js/scripts.js'); }}"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="{{ URL::asset('assets/owlcarousel/owl.carousel.min.js')}}"></script>
@yield('script')