<?php include_once('components/header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-9 col-12">
            <ol class="breadcrumb" style="background-color: rgb(48, 48, 48);">
                <li class="breadcrumb-item"><a href="#">Аудиокниги</a></li>
                <li class="breadcrumb-item"><a href="#">Фэнтези</a></li>
                <li class="breadcrumb-item active">Гарри Поттер и узник Азкабана</li>
            </ol>


            <div class="card post">
                <div class="row g-0">
                    <div class="col-md-2 col-4" style="max-width:168px">
                        <img src="img/gp1.jpeg" class="img-fluid img-post" alt="">
                    </div>
                    <div class="col-md-10 col-8">
                        <div class="card-body">

                            <div class="d-flex justify-content-between align-items-center">
                                <h1 class="card-title h4">Гарри Поттер и узник Азкабана</h1>
                                <div class="book_like_buttons">
                                    <span class="book_bookmark me-3"><a href="#" class="me-1" data-toggle="tooltip" data-placement="top" title="В избранное"><i class="fa-regular fa-bookmark fa-xl"></i></a>45</span>
                                    <span class="book_like me-3"><a href="#" class="me-1" data-toggle="tooltip" data-placement="top" title="Мне нравится"><i class="fa-regular fa-thumbs-up fa-xl"></i></a>29</span>
                                    <span class="book_dislike"><a href="#" class="me-1" data-toggle="tooltip" data-placement="top" title="Мне не нравится"><i class="fa-regular fa-thumbs-down fa-xl"></i></a>9</span>
                                </div>
                            </div>
                            <span class="h6"><i class="fa-solid fa-user-pen"></i> <a href="#">Джоан Роулинг</a></span><br />
                            <span class="h6"><i class="fa-solid fa-layer-group"></i> <a href="#">Фэнтези</a></span><br />
                            <span class="h6"><i class="fa-solid fa-list"></i> <a href="#">Гарри Поттер</a> (3)</span><br />
                            <span class="h6"><i class="fa-solid fa-microphone"></i> <a href="#">Александр Клюквин</a></span><br />

                            <p class="card-text">После фиаско в колдовстве гигантских размеров Гарри Поттер сбегает от Дурслеев из Литтл Уинджинга на ночном автобусе в предчувствии серьезной беды. Но министерство магии занято ловлей более крупной рыбы – Сириуса Блэка, преданного последователя Лорда Вольдеморта и печально известного заключенного...</p>


                        </div>

                    </div>
                    <div class="card-footer text-muted">
                        <!-- <span class="me-3"><i class="fa-regular fa-star"></i> Оценка <span class="badge bg-primary">7.8</span></span> -->
                        <span class="me-3"><i class="fa-regular fa-clock"></i> 12:39:38</span>
                        <span class="me-3"><i class="fa-regular fa-comment"></i> Комментариев: 3</span>
                        <span class="me-3"><i class="fa-solid fa-eye"></i> Просмотров: 2232</span>
                        <span class="me-3"><i class="fa-regular fa-calendar"></i> 01.12.2023 в 18:36</span>
                    </div>
                </div>
            </div>

            <!-------------------------------------------------------------->
            <div class="player mt-3 mb-3">
                <?php include_once('components/player.php'); ?>
            </div>
            <!-------------------------------------------------------------->



            <div class="card border-dark mb-3">

                <div class="card-body">
                    <ul>
                        <li>Жанры: <a href="#">Реализм</a></li>
                        <li>Сюжет: <a href="#">Линейный</a></li>
                        <li>Возраст читателя: <a href="#">Детская литература</a>, <a href="#">Подростковая литература</a></li>
                        <li>Время действия: <a href="#">20 век</a></li>
                        <li>Характеристики: <a href="#">Ироническое</a></li>
                        <li>Место действия: <a href="#">Наш мир (Земля)</a>, <a href="#">Россия/СССР/Русь</a></li>
                    </ul>
                </div>
            </div>

            <div class="card border-dark mb-3">
                <div class="card-header">Аудиокниги серии "<a href="#">Гарри Поттер</a>" (3 шт.)</div>
                <div class="card-body">
                    <ul>
                        <li>1 - <a href="#" class="me-3">Гарри Поттер и философский камень</a>
                            <span class="small like me-1"><i class="fa-regular fa-thumbs-up"></i></span>
                            <span class="small like me-2">29</span>
                            <span class="small dislike me-1"><i class="fa-regular fa-thumbs-down"></i></span>
                            <span class="small dislike">5</span>
                        </li>
                        <li>2 - <a href="#" class="me-3">Гарри Поттер и Тайная комната</a> <span class="small like me-1"><i class="fa-regular fa-thumbs-up"></i></span>
                            <span class="small like me-2">29</span>
                            <span class="small dislike me-1"><i class="fa-regular fa-thumbs-down"></i></span>
                            <span class="small dislike">5</span>
                        </li>
                        <li>3 - <a href="#" class="me-3">Гарри Поттер и узник Азкабана</a> <span class="small like me-1"><i class="fa-regular fa-thumbs-up"></i></span>
                            <span class="small like me-2">29</span>
                            <span class="small dislike me-1"><i class="fa-regular fa-thumbs-down"></i></span>
                            <span class="small dislike">5</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card border-dark mb-3">
                <div class="card-header">Аудиокниги автора "<a href="#">Джоан Роулинг</a>" (11 шт.)</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 col-md-3 mb-3 another_block">
                            <a href="#"><img src="img/gp1.jpeg" class="img-fluid img-post img_in_another" alt=""><br />Гарри Поттер и философский камень</a>
                        </div>
                        <div class="col-6 col-md-3 mb-3 another_block">
                            <a href="#"><img src="img/gp1.jpeg" class="img-fluid img-post img_in_another" alt=""><br />Гарри Поттер и философский камень</a>
                        </div>
                        <div class="col-6 col-md-3 mb-3 another_block">
                            <a href="#"><img src="img/gp1.jpeg" class="img-fluid img-post img_in_another" alt=""><br />Гарри Поттер и философский камень</a>
                        </div>
                        <div class="col-6 col-md-3 mb-3 another_block">
                            <a href="#"><img src="img/gp1.jpeg" class="img-fluid img-post img_in_another" alt=""><br />Гарри Поттер и философский камень</a>
                        </div>
                    </div>
                </div>
            </div>




            <div class="card border-dark mb-3 comments">
                <div class="card-header"><i class="fa-regular fa-comments"></i> Комментарии - 4 шт.</div>
                <div class="card-body">
                    <!-- <a href="#">Войдите в аккаунт</a>, для того, чтобы написать комментарий! -->
                    <p>Написать комментарий</p>
                    <div class="pb-4 leave_comment">

                        <form>
                            <div class="mb-3">
                                <textarea class="form-control bg-dark2 text-white" placeholder="Ваш комментарий..." rows="4"></textarea>
                            </div>


                            <button type="submit" class="btn btn-secondary">Отправить</button>
                        </form>
                    </div>

                    <div class="row d-flex justify-content-center">
                        <div class="col-md-12 col-lg-12 col-xl-12">

                            <div class="row">
                                <div class="col">
                                    <div class="d-flex flex-start">

                                        <div class="flex-grow-1 flex-shrink-1">

                                            <div class="one_comment d-flex flex-start mt-4">
                                                <a class="me-3" href="#">
                                                    <img class="rounded-circle shadow-1-strong" src="https://github.com/mdo.png" alt="" width="40" height="40" />
                                                </a>
                                                <div class="flex-grow-1 flex-shrink-1">
                                                    <div>
                                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                                            <p class="mb-0">
                                                                <span class="me-4"><a href="#">Мария</a></span>
                                                                <span class="small date me-4">02.12.2023 в 12:34</span>
                                                                <span class="small like me-1"><a href="#"><i class="fa-regular fa-thumbs-up"></i></a></span>
                                                                <span class="small like me-2">29</span>
                                                                <span class="small dislike me-1"><a href="#"><i class="fa-regular fa-thumbs-down"></i></a></span>
                                                                <span class="small dislike">5</span>
                                                            </p>
                                                            <a href="#!"><i class="fas fa-reply fa-xs"></i><span class="small"> ответить</span></a>
                                                        </div>
                                                        <p class="mb-0 comment_text">
                                                            Актуально.<br />
                                                            Очень нравится чтение Александра В.
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="one_comment_reply d-flex flex-start mt-4">
                                                <a class="me-3" href="#">
                                                    <img class="rounded-circle shadow-1-strong" src="https://github.com/mdo.png" alt="" width="40" height="40" />
                                                </a>
                                                <div class="flex-grow-1 flex-shrink-1">
                                                    <div>
                                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                                            <p class="mb-0">
                                                                <span class="me-4"><a href="#">Мария</a></span>
                                                                <span class="small date me-4">02.12.2023 в 12:34</span>
                                                                <span class="small like me-1"><a href="#"><i class="fa-regular fa-thumbs-up"></i></a></span>
                                                                <span class="small like me-2">29</span>
                                                                <span class="small dislike me-1"><a href="#"><i class="fa-regular fa-thumbs-down"></i></a></span>
                                                                <span class="small dislike">5</span>
                                                            </p>
                                                        </div>
                                                        <p class="mb-0 comment_text">
                                                            Актуально.<br />
                                                            Очень нравится чтение Александра В.
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="one_comment_reply d-flex flex-start mt-4">
                                                <a class="me-3" href="#">
                                                    <img class="rounded-circle shadow-1-strong" src="https://github.com/mdo.png" alt="" width="40" height="40" />
                                                </a>
                                                <div class="flex-grow-1 flex-shrink-1">
                                                    <div>
                                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                                            <p class="mb-0">
                                                                <span class="me-4"><a href="#">Мария</a></span>
                                                                <span class="small date me-4">02.12.2023 в 12:34</span>
                                                                <span class="small like me-1"><a href="#"><i class="fa-regular fa-thumbs-up"></i></a></span>
                                                                <span class="small like me-2">29</span>
                                                                <span class="small dislike me-1"><a href="#"><i class="fa-regular fa-thumbs-down"></i></a></span>
                                                                <span class="small dislike">5</span>
                                                            </p>
                                                        </div>
                                                        <p class="mb-0 comment_text">
                                                            Актуально.<br />
                                                            Очень нравится чтение Александра В.
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="one_comment d-flex flex-start mt-4">
                                                <a class="me-3" href="#">
                                                    <img class="rounded-circle shadow-1-strong" src="https://github.com/mdo.png" alt="" width="40" height="40" />
                                                </a>
                                                <div class="flex-grow-1 flex-shrink-1">
                                                    <div>
                                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                                            <p class="mb-0">
                                                                <span class="me-4"><a href="#">Мария</a></span>
                                                                <span class="small date me-4">02.12.2023 в 12:34</span>
                                                                <span class="small like me-1"><a href="#"><i class="fa-regular fa-thumbs-up"></i></a></span>
                                                                <span class="small like me-2">29</span>
                                                                <span class="small dislike me-1"><a href="#"><i class="fa-regular fa-thumbs-down"></i></a></span>
                                                                <span class="small dislike">5</span>
                                                            </p>
                                                            <a href="#!"><i class="fas fa-reply fa-xs"></i><span class="small"> ответить</span></a>
                                                        </div>
                                                        <p class="mb-0 comment_text">
                                                            Актуально.<br />
                                                            Очень нравится чтение Александра В.
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





        </div>

        <div class="col-md-3 col-12">

            <div class="sidebar_block mb-4">
                <h4 class="card-title mb-2">Жанры</h4>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#">Фантастика</a>
                        <span class="badge bg-primary rounded-pill">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#">Роман</a>
                        <span class="badge bg-primary rounded-pill">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#">Детектив</a>
                        <span class="badge bg-primary rounded-pill">1</span>
                    </li>
                </ul>
            </div>


            <div class="card border-dark mb-3 sidebar_new_books">
                <div class="card-header">Новинки</div>
                <div class="card-body">
                    <div class="new_book_one pb-2 pt-2">
                        <a href="#"><img src="img/gp1.jpeg" class="img-fluid img-post-new-books me-3" alt=""></a>
                        <div class="h6 mb-2"><a href="#">Гарри Поттер и философский камень</a></div>
                        <div><a href="#">Джоан Роулинг</a></div>
                        <div><i class="fa-regular fa-calendar"></i> 01.12.2023 в 18:36</div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="new_book_one pb-2 pt-2">
                        <a href="#"><img src="img/gp1.jpeg" class="img-fluid img-post-new-books me-3" alt=""></a>
                        <div class="h6 mb-2"><a href="#">Гарри Поттер и философский камень</a></div>
                        <div><a href="#">Джоан Роулинг</a></div>
                        <div><i class="fa-regular fa-calendar"></i> 01.12.2023 в 18:36</div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="new_book_one pb-2 pt-2">
                        <a href="#"><img src="img/gp1.jpeg" class="img-fluid img-post-new-books me-3" alt=""></a>
                        <div class="h6 mb-2"><a href="#">Гарри Поттер и философский камень</a></div>
                        <div><a href="#">Джоан Роулинг</a></div>
                        <div><i class="fa-regular fa-calendar"></i> 01.12.2023 в 18:36</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="card border-dark mb-3 sidebar_new_books">
                <div class="card-header">Последние комментарии</div>
                <div class="card-body">
                    <div class="new_comment_one pb-2 pt-2">
                        <div class="h6 mb-2 "><a href="#" class="d-flex align-items-center"><img class="rounded-circle shadow-1-strong me-2" src="https://github.com/mdo.png" alt="" width="30" height="30" /> Анастасия</a></div>
                        <div><i class="fa-solid fa-book"></i> <a href="#">Гарри Поттер и философский камень</a></div>
                        <div class="mb-2"><i class="fa-regular fa-calendar"></i> 01.12.2023 в 18:36</div>
                        <div>Актуально. Очень нравится чтение Александра В. Книга очень понравилась...</div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="new_comment_one pb-2 pt-2">
                        <div class="h6 mb-2 "><a href="#" class="d-flex align-items-center"><img class="rounded-circle shadow-1-strong me-2" src="https://github.com/mdo.png" alt="" width="30" height="30" /> Анастасия</a></div>
                        <div><i class="fa-solid fa-book"></i> <a href="#">Гарри Поттер и философский камень</a></div>
                        <div class="mb-2"><i class="fa-regular fa-calendar"></i> 01.12.2023 в 18:36</div>
                        <div>Актуально. Очень нравится чтение Александра В. Книга очень понравилась...</div>
                        <div class="clearfix"></div>
                    </div>


                </div>
            </div>



        </div>
    </div>
</div>
<?php include_once('components/footer.php'); ?>