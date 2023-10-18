
<html>
        <head>
            <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">

            <title> Admin User</title>
            <meta content="" name="description">
            <meta content="" name="keywords">


            <!-- Vendor CSS Files -->
            <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
            <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
            <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
            <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
            <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
            <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

            <!-- Template Main CSS File -->
            <link href="assets/css/style.css" rel="stylesheet">

        </head>
        <body>

                <header id="header" class="header bg-success fixed-top d-flex align-items-center header-scrolled">
                                       

                    <div class="d-flex align-items-center justify-content-between ">                    
                        <a href="index.html" class="logo d-flex align-items-center  ">
                           <span><i class="bx bxs-user text-light "></i></span> 
                            <span class="d-none d-lg-block text-light "> UserAdmin</span>
                        </a>
                        <i class="bi bi-list toggle-sidebar-btn text-light"></i>                    
                    </div>

                    <div class="search-bar mt-3">
                        <form action="#" class="search-form d-flex align-items-center" method="POST">
                            <input type="text" placeholder="Utilizador" name="pesquser" title="Procure um nome de um utilizador">
                            <button type="submit" title="Procurar"><i class="bi bi-search"></i></button>
                        </form>                        
                    </div>

                    <nav class="header-nav ms-auto">
                        <ul class="d-flex align-items-center">
                            <li class="nav-item d-block d-lg-none">
                                <a href="#" class="nav-link nav-icon search-bar-toggle"><i class="bi bi-search text-light"></i></a>
                            </li>

                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link nav-icon" data-bs-toggle="dropdown">
                                    <i class="bi bi-bell text-light"></i>
                                    <span class="badge bg-success badge-number bg-warning">5</span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                                    <li class="dropdown-header">
                                        Você tem 5 Notificações
                                        <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">Ver Todas</span></a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>

                                    <li class="notification-item">
                                        <i class="bi bi-exclamation-circle text-warning"></i>
                                        <div>
                                            <h4>Aviso</h4>
                                            <p>Você Precisa atualizar o pagamento de Manuntenção da sua conta</p>
                                            <p>30 min. atrás</p>
                                        </div>
                                    </li>

                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>

                                    <li class="notification-item">
                                        <i class="bi bi-x-circle text-danger"></i>
                                        <div>
                                            <h4>Ataque</h4>
                                            <p>A sua conta encontra-se em via de suspensão</p>
                                            <p>1 hr. atrás</p>
                                        </div>
                                    </li>

                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>

                                    <li class="notification-item">
                                        <i class="bi bi-check-circle text-success"></i>
                                        <div>
                                            <h4>Parabéns</h4>
                                            <p>A sua foi escolhida para beneficiar do nosso serviço Especial</p>
                                            <p>2 hrs. atrás</p>
                                        </div>
                                    </li>

                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>

                                    <li class="notification-item">
                                        <i class="bi bi-info-circle text-primary"></i>
                                        <div>
                                            <h4>Dicta reprehenderit</h4>
                                            <p>Os teus amigos estão dentro de um fórum, Entre...</p>
                                            <p>4 hrs. atrás</p>
                                        </div>
                                    </li>

                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li class="dropdown-footer">
                                        <a href="#">Mostrar todas notificações</a>
                                    </li>
                                </ul>
                                
                            </li>

                            <li class="nav-item d-flex dropdown pe-3">
                                <a href="#" class="nav-link nav-profile d-flex pe-0" data-bs-toggle="dropdown">
                                    <img src="assets/img/engkativa.jpg" alt="Perfil" class="rounded-circle">
                                    <span class="d-none d-md-block mt-2 dropdown-toggle ps-2 text-light">P. Kativa</span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                    <li class="dropdown-header">
                                        <h6>Pedilson Kativa</h6>
                                        <span>Desenvolvedor de Sistema</span>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>

                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                            <i class="bi bi-person"></i>
                                            <span>Perfil</span>
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>

                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                            <i class="bi bi-question-circle"></i>
                                            <span>Solicitar Suporte</span>
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>

                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <i class="bi bi-box-arrow-right"></i>
                                            <span>Sair</span>
                                        </a>
                                    </li>

                                </ul>

                            </li>


                        </ul>
                    </nav>

                </header>
            
                

                <aside class="sidebar bg-success">
            
                    <ul id="sidebar-nav" class="sidebar-nav bg-light  text-success">

                        <li class="nav-item ">
                            <a href="#" class="nav-link ">
                                <i class="bi bi-house-fill text-success"></i>
                                <span class="text-success">Página Principal</span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="#" class="nav-link collapsed text-success" data-bs-target="#usuarioas-nav" data-bs-toggle="collapse">
                                <i class="bi bi-people-fill text-success"></i><span class="">Usuários</span><i class="bi bi-chevron-down ms-auto text-success"></i>
                            </a>
                            <ul id="usuarioas-nav" class="nav-content collapse" data-bs-parent="sidebar-nav">
                                <li>
                                    <a href="#" class="text-success">
                                        <i class="bi bi-circle"></i><span >Listar</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-success">
                                        <i class="bi bi-circle"></i><span>Personalizar</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-success">
                                        <i class="bi bi-circle"></i><span>Promover</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-success">
                                        <i class="bi bi-circle"></i><span>Notificar</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item ">
                            <a href="#" class="nav-link  collapsed text-success" data-bs-target="#pagamentos-nav" data-bs-toggle="collapse">
                                <i class="bi bi-currency-exchange text-success"></i><span class="">Pagamentos</span><i class="bi bi-chevron-down ms-auto text-success"></i>
                            </a>
                            <ul id="pagamentos-nav" class="nav-content collapse" data-bs-parent="sidebar-nav">
                                <li>
                                <a href="#" class="text-success">
                                    <i class="bi bi-circle"></i><span>Hospedagem/Serviços</span>
                                </a>
                                </li>
                                <li>
                                    <a href="#" class="text-success">
                                        <i class="bi bi-circle"></i><span>Rembolso</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-success">
                                        <i class="bi bi-circle"></i><span>Bonificação</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="nav-link  collapsed text-success" data-bs-target="#relatorios-nav" data-bs-toggle="collapse">
                                <i class="bi bi-bar-chart-line-fill text-success"></i><span class="">Relatórios</span><i class="bi bi-chevron-down ms-auto text-success"></i>
                            </a>
                            <ul id="relatorios-nav" class="nav-content collapse" data-bs-parent="sidebar-nav">
                                <li>
                                    <a href="#" class="text-success">
                                        <i class="bi bi-circle"></i><span >Serviços Prestados</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-success">
                                        <i class="bi bi-circle"></i><span>Rembolso Efectuados</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-success">
                                        <i class="bi bi-circle"></i><span>Personalizado</span>
                                    </a>
                                </li>
                            </ul>
                        </li>



                    </ul>

                </aside>

                <main id="main" class="main">
                    <h1>Painel Principal</h1>
                    <div class="row">
                        <div class="col-3">
                            <div class="card bg-success p-2 text-light">
                                
                                <div class="card-body">                                    
                                                                      
                                    <div class="d-flex ">
                                        <h5>Usuários </h5>                                        
                                        
                                    </div><hr>
                                    <h3 class="align-items-center">40</h3>
                                    
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card bg-danger p-2 text-light">
                                
                                <div class="card-body">                                    
                                                                      
                                    <div class="d-flex ">
                                        <h5>Usuários Bronze </h5>                                       
                                        
                                    </div><hr>
                                    <h3 class="align-items-center">20</h3>
                                    
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card bg-secondary p-2 text-light">
                                
                                <div class="card-body">                                    
                                                                      
                                    <div class="d-flex ">
                                        <h5>Usuários Prata </h5>                                       
                                        
                                    </div><hr>
                                    <h3 class="align-items-center">10</h3>
                                    
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card bg-warning p-2 text-light">
                                
                                <div class="card-body">                                    
                                                                      
                                    <div class="d-flex ">
                                        <h5>Usuários Gold </h5>                                        
                                        
                                    </div><hr>
                                    <h3 class="align-items-center">10</h3>
                                    
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row bg-dark p-4">
                        <div class="d-flex  justify-content-between">
                            <div class="col-5 float-right">
                                <h4 class="text-light">Utilizadores do sitema</h4>
                            </div>
                            <div class="">
                                <button class="btn btn-success float-right" data-bs-toggle="modal" data-bs-target="#novouser"> <i class="bi bi-person-plus-fill"></i> Adicionar</button>
                            </div>  
                            
                        </div><hr>

                        <table id="table" class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Categoria</th>
                                    <th>Perfil</th>
                                    <th colspan="3" class="text-center">Opções</th>
                                </tr>                                
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>João Paz</td>
                                    <td>Bronze</td>
                                    <td>Utilizador</td>
                                    <td ><span ><i class="bi bi-eye text-success"></i></span></td>
                                    <td><span ><i class="bi bi-pen-fill text-success"></i></span></td>
                                    <td><label for="" id="menu-suspenso-oculto" data-bs-toggle="dropdown">                                                                                
                                                                                <ul class="dropdown-menu ">
                                                                                    <li class=" text-light"> <a class="dropdown-item" href="#"><i class="bi bi-trash text-success"></i>Eliminar</a> </li>
                                                                                    <li class=" text-light"> <a class="dropdown-item" href="#"><i class="bi bi-pen text-success"></i>Editar Permissões</a> </li>
                                                                                    <li class=" text-light"> <a class="dropdown-item" href="#"><i class="bi bi-justify text-success"></i>Lista de Acções</a> </li>
                                                                                    <li class=" text-light"> <a class="dropdown-item" href="#"><i class="bi bi-arrow-up text-success"></i>Promover</a> </li>
                                                                                </ul><i class="bi bi-three-dots-vertical text-succes" ></i></label></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Bento Cruz</td>
                                    <td>Prata</td>
                                    <td>Utilizador</td>
                                    <td ><span ><i class="bi bi-eye text-success"></i></span></td>
                                    <td><span ><i class="bi bi-pen-fill text-success"></i></span></td>
                                    <td><label for="" id="menu-suspenso-oculto" data-bs-toggle="dropdown">                                                                                
                                                                                <ul class="dropdown-menu ">
                                                                                    <li class=" text-light"> <a class="dropdown-item" href="#"><i class="bi bi-trash text-success"></i>Eliminar</a> </li>
                                                                                    <li class=" text-light"> <a class="dropdown-item" href="#"><i class="bi bi-pen text-success"></i>Editar Permissões</a> </li>
                                                                                    <li class=" text-light"> <a class="dropdown-item" href="#"><i class="bi bi-justify text-success"></i>Lista de Acções</a> </li>
                                                                                    <li class=" text-light"> <a class="dropdown-item" href="#"><i class="bi bi-arrow-up text-success"></i>Promover</a> </li>
                                                                                </ul><i class="bi bi-three-dots-vertical text-succes" ></i></label></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Filipe Estêvão</td>
                                    <td>Gold</td>
                                    <td>Utilizador</td>
                                    <td ><span ><i class="bi bi-eye text-success"></i></span></td>
                                    <td><span ><i class="bi bi-pen-fill text-success"></i></span></td>
                                    <td><label for="" id="menu-suspenso-oculto" data-bs-toggle="dropdown">                                                                                
                                                                                <ul class="dropdown-menu ">
                                                                                    <li class=" text-light"> <a class="dropdown-item" href="#"><i class="bi bi-trash text-success"></i>Eliminar</a> </li>
                                                                                    <li class=" text-light"> <a class="dropdown-item" href="#"><i class="bi bi-pen text-success"></i>Editar Permissões</a> </li>
                                                                                    <li class=" text-light"> <a class="dropdown-item" href="#"><i class="bi bi-justify text-success"></i>Lista de Acções</a> </li>
                                                                                    <li class=" text-light"> <a class="dropdown-item" href="#"><i class="bi bi-arrow-up text-success"></i>Promover</a> </li>
                                                                                </ul><i class="bi bi-three-dots-vertical text-succes" ></i></label></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="6">Total</th>
                                    <th >1</th>
                                </tr>
                                
                            </tfoot>
                        </table>
                    </div>

                    <div id="novouser" class="modal fade" tab-index="-1">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-success text-light">
                                    <h5 class="modal-title">Inserir Novo Usuário</h5>
                                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" class=" row  form-control">
                                        <div class="d-flex justify-content-around">
                                            <div class="form-floating col-md-4 ">
                                                <input type="text" id="nome" class="form-control" placeholder=" Nome">
                                                <label for="nome"> Nome</label>
                                            </div> 
                                            <div class="form-floating col-md-3 ">
                                                <input type="text" id="sobrenome" class="form-control" placeholder="Sobre Nome">
                                                <label for="sobrenome">Sobre Nome</label>
                                            </div>
                                            <div class="form-floating col-md-4">
                                                <input type="text" name="username" id="correio" class="form-control" placeholder="Insira um email" readonly>
                                                <label for="email">Nome de Usuário</label>
                                            </div>

                                        </div> <br>

                                        <div class="d-flex justify-content-evenly">
                                            <div class=" col-md-3">
                                                <div class=" justify-contet-between">
                                                    <span>Sexo</span>

                                                    <select name="" id="" class="form-select " aria-readonly="true">
                                                        <option value="" class="form-control"></option>
                                                        <option value="Masculino" class="form-select-item">Masculino</option>
                                                        <option value="Femenino" class="form-control">Femenino</option>                                      
                                                    </select>
                                                </div>
                                            </div> 
                                            <div class="form-floating col-md-4 ">
                                                <input type="password" name="passwrord" id="password" class="form-control" placeholder="Definir Palavra Passe">
                                                <label for="sobrenome">Definir uma Palavra Passe</label>
                                            </div>
                                            <div class="form-floating col-md-4">
                                                <input type="password" id="confpassword" class="form-control" placeholder="Confirme a Palavra Passe">
                                                <label for="confpassword">Definir uma Palavra Passe</label>
                                            </div>

                                        </div> <br>

                                        <div class="d-flex justify-content-evenly">
                                            <div class="form-floating col-md-5 ">
                                                
                                                <input type="email" name="email" id="correio" class="form-control" placeholder="Insira um email" >
                                                <label for="email">Email</label>
                                                                                                
                                            </div><br>
                                            <div class=" col-md-3 ">
                                                <span>Categoria</span>
                                                <select name="" id="" class="form-select " aria-readonly="true" placeholder="Categoria" >
                                                    <option value="" class="form-control"></option>
                                                    <option value="Bronze" class="form-select-item">Bronze</option>
                                                    <option value="Prata" class="form-control">Prata</option>
                                                    <option value="Gold" class="form-control">Gold</option>                                                
                                                </select>
                                                
                                            </div>
                                            <div class=" col-md-3">
                                                <span>Perfil</span>
                                                <select name="" id="" class="form-select " aria-readonly="true">
                                                    <option value="" class="form-control"></option>
                                                    <option value="Masculino" class="form-select-item">Admin</option>
                                                    <option value="Femenino" class="form-control">User</option>
                                                                                                    
                                                </select>
                                            </div>

                                        </div>
                                        
                                    </form>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class=" btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-success">Salvar</button>

                                </div>

                            </div>
                        </div>
                        
                    </div>
                    <?php
                        $a=2;
                        $b=3;
                        $soma=$a+$b;
                        echo "A soma é ".$soma; 

                    ?>
                

                </main>

                <footer id="footer" class="footer ">
                    <div class="copyright">
                        &copy; Copyright <strong><span>UserAdmin</span></strong>. Todos direitos reservados
                    </div>
                    <div class="credits">
                        Redesenhado por <a href="https://bootstrapmade.com/">Pedilson Kativa</a>
                        Baseado em <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>


                    
                </footer >
        



    
                <!-- Vendor JS Files -->
                <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
                <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                <script src="assets/vendor/chart.js/chart.umd.js"></script>
                <script src="assets/vendor/echarts/echarts.min.js"></script>
                <script src="assets/vendor/quill/quill.min.js"></script>
                <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
                <script src="assets/vendor/tinymce/tinymce.min.js"></script>
                <script src="assets/vendor/php-email-form/validate.js"></script>

                <!-- Template Main JS File -->
                <script src="assets/js/main.js"></script>
        </body>
</html>