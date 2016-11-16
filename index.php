<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>730.org</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="/lib/semantic/dist/semantic.min.css">
        <link rel="stylesheet" href="/css/structure.css?v=<?= time() ?>">
    </head>

    <body>

        <div class="ui middle aligned one column grid container">
            <div class="column">

                <div class="ui huge header lora">
                    <p><span>We have <strong>730</strong> days to fix</span></p>
                    <p><span>the events of November 8, 2016</span></p>
                </div>

                <article>
                    <p>We’re building seventhirty.org to maximize the impact of each day leading up to the 2018 Midterm Elections.</p>
                    <p style="margin-bottom: 5em;">Stay tuned for a new way to become informed, get connected and stay engaged with <br /> progressive issues, organizations and candidates</p>
                    <p><a class="ui inverted big yellow button signup" href="#">Sign up for Updates</a></p>
                </article>
            </div>
        </div>

        <div class="ui basic modal">
            <div class="ui middle aligned centered grid">
                    <div class="twelve wide column">
                        <div id="signup-form" class="ui basic segment">
                            <div class="ui inverted huge header">Connect with the 730 Movement</div>
                            <form class="ui big inverted form" method="post">
                                <div class="fields">
                                    <div class="five wide ui input field"><input type="text" name="name.first" placeholder="First Name"></div>
                                    <div class="five wide ui input field"><input type="text" name="name.last" placeholder="Last Name"></div>
                                    <div class="six wide ui field">
                                        <select class="ui fluid dropdown" name="age-group">
                                            <option value="">Age Group</option>
                                            <option value="18-24">18-24</option>
                                            <option value="25-34">25-34</option>
                                            <option value="35-49">35-49</option>
                                            <option value="50+">50+</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="fields">

                                    <div class="ui twelve wide input field"><input type="text" name="email" placeholder="Email Address">
                                    </div>
                                    <div class="ui four wide field"><button class="ui fluid inverted yellow button join" style="padding: 1.275em 1em;">Join</button></div>
                                </div>
                                <div class="ui error message"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="/lib/jquery/dist/jquery.min.js"></script>
        <script src="/lib/semantic/dist/semantic.min.js"></script>
        <script src="/lib/jquery-serialize-object/dist/jquery.serialize-object.min.js"></script>
        <script src="/lib/validator-demo/mailgun_validator.js"></script>
        <script src="/js/main.js?v=<?= time() ?>"></script>
    </body>
</html>
