<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <link rel="stylesheet" href="../css/profile.css">
    <title>MySite | PROFILE</title>
</head>
<body>
    <!-- Верхняя шапка. Поиск. Иконка пользователя-->
    <div class="top_bar">
        <div class="top_bar__items">
            MySite   &nbsp &nbsp
            <input class="top_bar__items___search_box" type="text" name="" placeholder="Search for people">
            <img class="top_bar__items___image_box" src="../resources/image/search_box/user1.png">
        </div>
    </div>
    <!-- Профиль. Картинка профиля.  -->
    <div class="profile">
        <img class="profile__image" src="../resources/image/profile/user1.gif" alt="">
        <img class="profile__icon" src="../resources/image/search_box/user1.png" alt="">
        <br>
                <div style="font-size:30px;">NOBODY</div>
            <br>
            <div class="profile_board">
                <div class="profile_board__Buttons">TimeLine</div> 
                <div class="profile_board__Buttons">About</div> 
                <div class="profile_board__Buttons">Friends</div> 
                <div class="profile_board__Buttons">Photos</div> 
                <div class="profile_board__Buttons">Setting</div>
            </div>
    </div>
    <div class="bottom_box">
        <div class="bottom_box__one">
            Friends<br/>
            <div class="bottom_box__one___friends">
                <img class="bottom_box__one___friends____image" src="../resources/image/profile/7ec8b2cb033334594bb3ced6a1da4c31.jpg" alt=""><br/>Linux
            </div>
            <div class="bottom_box__one___friends">
                <img class="bottom_box__one___friends____image" src="../resources/image/profile/i.webp" alt=""><br/> Windows
            </div>
            <div class="bottom_box__one___friends">
                <img class="bottom_box__one___friends____image" src="../resources/image/profile/i (1).webp" alt=""><br/> Mac
            </div>
            <div class="bottom_box__one___friends">
                <img class="bottom_box__one___friends____image" src="../resources/image/profile/Elon-Musk-Vivatech-Business-1499013102.jpg" alt="" ><br/>SpaceX
            </div>
        </div>
        <div class="bottom_box__two">
            <div class="bottom_box__two__post">
                <textarea class="bottom_box__two__post___textarea" name="" placeholder="Whats on your mind?" ></textarea>
                <input class="bottom_box__two__post___button" type="submit" value="Post" ><br/>
                <br>
            </div>
            <!--опупбликованные посты-->
            <div class="bottom_box__two___post_bar">
                    <!--Пост №1-->
                    <div class="bottom_box__two___post_bar____post">
                        <div>
                            <img src="../resources/image/profile/87a880cbdcd5603b9125ac2dcddc8722.jpg" alt="" style="width: 75px; margin-right:4px;">
                        </div>
                        <div>
                            <div style="font-weight: bold; color: #405d9b;">ANONIM</div>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam at voluptatem adipisci, animi odit facilis obcaecati quibusdam quas quasi veritatis ab expedita nulla magni, est sit et? Ab, pariatur nihil.
                            <br><br>
                            <a href="">Like</a> . <a href="">Comment</a> . <span style="color:#999">April 23 2020</span>
                        </div>
                    </div>
                    <!--Пост №2-->
                    <div class="bottom_box__two___post_bar____post">
                        <div>
                            <img src="../resources/image/profile/Elon-Musk-Vivatech-Business-1499013102.jpg" alt="" style="width: 75px; margin-right:4px;">
                        </div>
                        <div>
                            <div style="font-weight: bold; color: #405d9b;">SpaceX</div>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam at voluptatem adipisci, animi odit facilis obcaecati quibusdam quas quasi veritatis ab expedita nulla magni, est sit et? Ab, pariatur nihil.
                            <br><br>
                            <a href="">Like</a> . <a href="">Comment</a> . <span style="color:#999">April 23 2019</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>