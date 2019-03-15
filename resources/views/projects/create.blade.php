<!doctype html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
</head>
<body>
<form method="POST" action="/projects" class="container" style="padding-top: 40px;">
    @csrf

    <h1 class="heading is-1">Create Project</h1>

    <div class="field">
        <label for="title" class="label">Title</label>

        <div class="control">
            <input type="text" class="input" name="title" placeholder="Title">
        </div>
    </div>

    <div class="field">
        <label for="description" class="label">Title</label>

        <div class="control">
            <textarea name="description" class="textarea"></textarea>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">Create Project</button>
        </div>
    </div>
</form>
</body>
</html>