<html>
<body>
    <h1>Halaman Product</h1>
    <h3>List Products</h3>
    <ul>
        <li><a href="{{ url('/category/food-beverage') }}">Food Beverage</a></li>
        <li><a href="{{ url('/category/beauty-health') }}">Beauty Health</a></li>
        <li><a href="{{ url('/category/home-care') }}">Home Care</a></li>
        <li><a href="{{ url('/category/baby-kid') }}">Baby Kid</a></li>
    </ul>
    <br><br>
    @include('templates.footer')
</body>
</html>