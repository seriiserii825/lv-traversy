<form action="{{ route('logout') }}" method="post" accept-charset="utf-8">
    @csrf
    <button type="submit" class="text-white hover:underline">
        <i class="fas fa-sign-out-alt"></i>
        <span>Logout</span>
    </button>
</form>
