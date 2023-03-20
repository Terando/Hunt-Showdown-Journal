<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hunt: Showdown Journal</title>

        <link rel="stylesheet" href="/css/pico.min.css">
        <!-- <link rel="stylesheet" href="/css/hunt-journal.css"> -->
    </head>
    <body>
        <nav class="container">
            <ul>
                <li><strong>Hunt: Showdown Journal</strong></li>
            </ul>
            <ul>
                <li><a href="#">Guns</a></li>
                <li><a href="#">Traits</a></li>
                <li><a href="#" role="button">Register</a></li>
            </ul>
        </nav>

        <main class="container">
            <hgroup>
                <h1>Everything you need to know!</h1>
                <h2>Welcome to the journal, your one place to stop and get information</h2>
            </hgroup>

            <p>Bla bla more information.</p>

            <div class="grid">
                <article id="guns" class="mt-0">
                    <h2>Guns</h2>
                    <p>Nullam dui arcu, malesuada et sodales eu, efficitur vitae dolor. Sed ultricies dolor non ante vulputate hendrerit. Vivamus sit amet suscipit sapien. Nulla iaculis eros a elit pharetra egestas. Nunc placerat facilisis cursus. Sed vestibulum metus eget dolor pharetra rutrum.</p>
                    <button>Go to Guns</button>
                </article>

                <article id="traits" class="mt-0">
                    <h2>Traits</h2>
                    <p>Nullam dui arcu, malesuada et sodales eu, efficitur vitae dolor. Sed ultricies dolor non ante vulputate hendrerit. Vivamus sit amet suscipit sapien. Nulla iaculis eros a elit pharetra egestas. Nunc placerat facilisis cursus. Sed vestibulum metus eget dolor pharetra rutrum.</p>
                    <button>Go to Traits</button>
                </article>
            </div>
        </main>

        <footer class="container">
            <p>&copy; {{ date('Y') }}</p>
        </footer>
    </body>
</html>
