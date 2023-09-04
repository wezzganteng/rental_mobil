@if (Auth::user()->hasRole('member'))
<script>
    window.location="/";
    </script>   
    @elseif(Auth::user()->hasRole('admin'))
    <script>
        window.location="/admin";
    </script>
@endif