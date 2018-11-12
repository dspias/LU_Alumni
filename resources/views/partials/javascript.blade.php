{{-- bootstrap js cdn files linkup --}}


{{-- finish js bootsrap cdn link's --}}
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>


{{-- ================< Bootstrap JS Starts >============== --}}
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
{{-- =================< Bootstrap JS Ends >=============== --}}


{{-- ================< Fire-UI JS Starts >============== --}}
{{-- <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script> --}}
<script src="{{ asset('js/fire-js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/fire-js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/fire-js/fire-main.js') }}"></script>
{{-- =================< Fire-UI JS Ends >=============== --}}

{{-- If Importent to added some file's --}}
@yield('scripts')