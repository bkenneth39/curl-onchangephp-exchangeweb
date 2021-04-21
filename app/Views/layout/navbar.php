<div class="navbaryay">
    <nav class="navbar navbar-light bg-dark">
        <a class="navbar-brand"><img src="img/logo.png" style="width: 192px; height: 108px;"></a>
        <form action="home" method="POST">
            <select class="form-control  option" onchange="this.form.submit()" name="opsi">
                <option value="all" <?php if ($value == 'All') echo "selected" ?>>All</option>
                <option value="crypto" <?php if ($value == 'crypto') echo "selected" ?>>Crypto</option>
                <option value="fiat" <?php if ($value == 'fiat') echo "selected" ?>>FIAT</option>
                <option value="commodity" <?php if ($value == 'commodity') echo "selected" ?>>Commodity</option>
            </select>
        </form>
    </nav>
</div>