<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>John Doe</h5>
        <p>Administrator</p>
        <br>
        <form action="{{ route('logout') }}" method="post" class="">
            @csrf
            <button type="submit" class="btn btn-light btn-sm">Log-out</button>
        </form>

    </div>
</aside>
