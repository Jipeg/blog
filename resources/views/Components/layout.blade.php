<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>    
        @if (!isset($title) || $title->isEmpty())
            Document
        @else
            {{ $title }}
        @endif
    </title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
    <?php
        echo $slot;
    ?>
    {{ $slot }}
</body>
</html>