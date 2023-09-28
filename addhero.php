<?php include_once 'includes/header.php'; ?>

<div class="container">

    <div class="jumbotron bg-secondary">
        <h2 class="text-center text-light">API HERO - CREATE</h2>
    </div>

    <form action="http://localhost/hero-api/v1/Api.php?apicall=createhero" method="POST">
        
        <div class="form-group">
            <label for="name">Hero Name</label>
            <input class="form-control" type="text" name="name" id="name" placeholder="Batman" required autocomplete="off">
        </div>
        
        <div class="form-group">
            <label for="realname">Real name</label>
            <input class="form-control" type="text" name="realname" id="realname" placeholder="Bruce Wayne" required autocomplete="off">
        </div>
        
        <div class="form-group">
            <label for="rating">Rating</label>
            <select name="rating" id="rating" class="custom-select">
                <option selected>Select hero rating</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        <div class="form-group">
            <label for="teamaffiliation">Team Affiliation</label>
            <input class="form-control" type="text" name="teamaffiliation" id="teamaffiliation" placeholder="Justice League" required autocomplete="off">
        </div>

        <button type="submit" class="btn btn-success">Include heroes</button>

        <a href="index.php" class="btn btn-info">List heroes</a>
    </form>

</div>

<?php include_once 'includes/footer.php'; ?>