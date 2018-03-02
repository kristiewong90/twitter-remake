<link rel="stylesheet" href="/css/app.css">

<header>
    <div class="">
        <div class="container">
        div 1
        </div>
    </div>
    <div class="header-img">
        <img src="https://pbs.twimg.com/profile_banners/25073877/1519516126/1500x500">
    </div>
    <div class="">
        div 3
    </div>
</header>


<div class="container-one">

    <div class="profile">
        <?php foreach ($profiles as $profile): ?>
            <h3><?php echo $profile->user->name ?></h3>
            @<?php echo $profile->user->handle ?><br>
            <?php echo $profile->location ?><br>
            <?php echo $profile->sentence ?><br>
            Joined <?php echo $profile->dateJoined ?>
        <?php endforeach ?>
    </div>

    <ul class="tweets">
        <h4>Tweets</h4>
        <a href="#">Tweets & Replies</a>
        <a href="#">Media</a>
        <?php foreach ($tweets as $tweet): ?>
            <li><img src="<?php echo $tweet->user->image ?>">
                <?php echo $tweet->user->name ?>
                @<?php echo $tweet->user->handle ?>
                <?php echo $tweet->time ?><br>
                <?php echo $tweet->content ?><br>
                <?php echo count($tweet->commentCount) ?>
                <?php echo count($tweet->retweetCount) ?>
                <?php echo count($tweet->likeCount) ?>
            </li>
        <?php endforeach ?>
    </ul>



    <div class = "right-column">
        <div class="new-to-twitter">
            <h4>New to Twitter?</h4>
            <p> Sign up now to get your own personalized timeline!</p>
            <button>Sign Up</button>
        </div>

        <ul class="users">
            <h2>Users</h2>
            <?php foreach ($users as $user): ?>
                <li><img src="<?php echo $user->image ?>"><br>
                    <?php echo $user->name ?><br>
                    @<?php echo $user->handle ?>
                </li>
            <?php endforeach ?>
        </ul>
    </div>

</div>
