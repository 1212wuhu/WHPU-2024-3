<!DOCTYPE html>
<html lang="zh">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>武汉轻工大学</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.7.2/css/all.min.css"
          integrity="sha256-nAmazAk6vS34Xqo0BSrTb+abbtFlgsFK7NKSi6o7Y78="
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">

    <!-- Smallpop -->
    <link href="{{asset('css/spop.css')}}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">


</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">智慧问答系统</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{url('/stu')}}">
                <i class="fas fa-fw fa-home"></i>
                <span>首页</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            信息查询
        </div>

        <!-- Nav Item - Information Query -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInfo"
               aria-expanded="true" aria-controls="collapseInfo">
                <i class="fas fa-fw fa-laptop"></i>
                <span>信息查询</span>
            </a>
            <div id="collapseInfo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">你可以查看：</h6>
                    <a class="collapse-item" href="{{url('/stu/queryClass')}}">你的班级</a>
                    <a class="collapse-item" href="{{url('/stu/queryDorm')}}">你的宿舍</a>
                    <a class="collapse-item" href="{{url('/stu/queryCountryFolk')}}">你的老乡</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Arrived -->
        <li class="nav-item">
            <a class="nav-link" href="{{url('/stu/nav')}}">
                <i class="fas fa-fw fa-plane-arrival"></i>
                <span>到站信息</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            智慧课程服务
        </div>

        <!-- Nav Item - Notice -->
        <li class="nav-item">
            <a class="nav-link" href="{{url('/stu/ai')}}">
                <i class="fas fa-fw fa-bell"></i>
                <span>AI助手</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            通知服务
        </div>

        <!-- Nav Item - Notice -->
        <li class="nav-item">
            <a class="nav-link" href="{{url('/stu/posts')}}">
                <i class="fas fa-fw fa-bell"></i>
                <span>所有通知</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            迎新服务
        </div>

        <!-- Nav Item - welcome -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseWel"
               aria-expanded="true" aria-controls="collapseWel">
                <i class="fas fa-fw fa-route"></i>
                <span>报到流程</span>
            </a>
            <div id="collapseWel" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">你可以查看：</h6>
                    <a class="collapse-item" href="{{url('/stu/enrollInfo')}}">报到说明</a>
                    <a class="collapse-item" href="{{url('/stu/enrollGuide')}}">开始报到</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Heading -->
        <div class="sidebar-heading">
            信息填报
        </div>

        <!-- Nav Item - selfInfo -->
        <li class="nav-item active">
            <a class="nav-link" href="{{url('/stu/personalInfo')}}">
                <i class="fas fa-fw fa-info"></i>
                <span>个人信息</span></a>
        </li>

        <!-- Nav Item - GreenPath -->
        <li class="nav-item">
            <a class="nav-link" href="{{url('/stu/greenPath')}}">
                <i class="fas fa-fw fa-hands-helping"></i>
                <span>绿色通道</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            @if($messages['unreadNum'] > 0)
                                <span class="badge badge-danger badge-counter">{{$messages['unreadNum']}}</span>
                            @endif
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                消息中心
                            </h6>
                            @if(count($messages['showMessage'])!=0) @foreach ($messages['showMessage'] as $message)
                                <a class="dropdown-item d-flex align-items-center" href="{{url($message['toURL'])}}">
                                    <div @if ($message['readed'] == false) class="font-weight-bold" @endif>
                                        <div class="text-truncate">{{$message['title']}}</div>
                                        <div class="small text-gray-500">{{$message['context']}}</div>
                                    </div>
                                </a>
                            @endforeach
                            @else
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div>
                                        <div class="text-truncate">暂时没有消息哦~</div>
                                    </div>
                                </a>
                            @endif
                            <a class="dropdown-item text-center small text-gray-500"
                               href="{{url($messages['moreInfoUrl'])}}">更多信息...</a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">您好，{{$user}}</span>
                            <img class="img-profile rounded-circle"
                                 src="{{url($userImg)}}">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{url($toInformationURL)}}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> 个人信息
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> 登出
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">个人信息</h1>
                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- Infomation Card ID number -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">您的学号
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$stuID}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-id-card fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Infomation Card shcool -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">所在院系
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$stuDept}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Infomation Card department -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">宿舍</div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                    {{$stuDormitory}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-building fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Infomation Card report time -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">报到时间
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$stuReportTime}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-2">
                    <div class="alert alert-primary" role="alert">
                        @if($needCommit)
                            请确认以下信息，并且提交以下空内的信息，核验完成后不可更改
                        @else
                            核验已完成，信息不可更改
                        @endif
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th>姓名</th>
                                <td id="name" data-target="{{$stuInfo->id}}">{{$stuInfo->name}}</td>
                                <th>学号</th>
                                <td>{{$stuInfo->schoolID}}</td>
                                <th>性别</th>
                                <td>{{$stuInfo->gender}}</td>
                            </tr>
                            <tr>
                                <th>考生号</th>
                                <td colspan="2">{{$stuInfo->eid}}</td>
                                <th>身份证</th>
                                <td colspan="2">{{$stuInfo->cid}}</td>
                            </tr>
                            <tr>
                                <th>学院</th>
                                <td>{{$stuInfo->dept}}</td>
                                <th>专业</th>
                                <td>{{$stuInfo->major}}</td>
                                <th>民族</th>
                                <td>
                                    <select class="form-control form-control-sm" id="nation" @if(!$needCommit) disabled @endif>
                                        <option value="汉族">汉族</option>
                                        <option value="蒙古族">蒙古族</option>
                                        <option value="回族">回族</option>
                                        <option value="藏族">藏族</option>
                                        <option value="维吾尔族">维吾尔族</option>
                                        <option value="苗族">苗族</option>
                                        <option value="彝族">彝族</option>
                                        <option value="壮族">壮族</option>
                                        <option value="布依族">布依族</option>
                                        <option value="朝鲜族">朝鲜族</option>
                                        <option value="满族">满族</option>
                                        <option value="侗族">侗族</option>
                                        <option value="瑶族">瑶族</option>
                                        <option value="白族">白族</option>
                                        <option value="土家族">土家族</option>
                                        <option value="哈尼族">哈尼族</option>
                                        <option value="哈萨克族">哈萨克族</option>
                                        <option value="傣族">傣族</option>
                                        <option value="黎族">黎族</option>
                                        <option value="傈僳族">傈僳族</option>
                                        <option value="佤族">佤族</option>
                                        <option value="畲族">畲族</option>
                                        <option value="高山族">高山族</option>
                                        <option value="拉祜族">拉祜族</option>
                                        <option value="水族">水族</option>
                                        <option value="东乡族">东乡族</option>
                                        <option value="纳西族">纳西族</option>
                                        <option value="景颇族">景颇族</option>
                                        <option value="柯尔克孜族">柯尔克孜族</option>
                                        <option value="土族">土族</option>
                                        <option value="达斡尔族">达斡尔族</option>
                                        <option value="仫佬族">仫佬族</option>
                                        <option value="羌族">羌族</option>
                                        <option value="布朗族">布朗族</option>
                                        <option value="撒拉族">撒拉族</option>
                                        <option value="毛南族">毛南族</option>
                                        <option value="仡佬族">仡佬族</option>
                                        <option value="锡伯族">锡伯族</option>
                                        <option value="阿昌族">阿昌族</option>
                                        <option value="普米族">普米族</option>
                                        <option value="塔吉克族">塔吉克族</option>
                                        <option value="怒族">怒族</option>
                                        <option value="乌孜别克族">乌孜别克族</option>
                                        <option value="俄罗斯族">俄罗斯族</option>
                                        <option value="鄂温克族">鄂温克族</option>
                                        <option value="德昂族">德昂族</option>
                                        <option value="保安族">保安族</option>
                                        <option value="裕固族">裕固族</option>
                                        <option value="京族">京族</option>
                                        <option value="塔塔尔族">塔塔尔族</option>
                                        <option value="独龙族">独龙族</option>
                                        <option value="鄂伦春族">鄂伦春族</option>
                                        <option value="赫哲族">赫哲族</option>
                                        <option value="门巴族">门巴族</option>
                                        <option value="珞巴族">珞巴族</option>
                                        <option value="基诺族">基诺族</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>联系方式</th>
                                <td>
                                    <input type="text" class="form-control form-control-sm" maxlength="11"
                                           onkeyup="this.value=this.value.replace(/\D/g,'')" id="phone" value="{{$stuInfo->phone}}"
                                           @if(!$needCommit) disabled @endif>
                                </td>
                                <th>宿舍</th>
                                <td>{{$stuInfo->dorm}}</td>
                                <th>政治面貌</th>
                                <td>
                                    <select class="form-control form-control-sm" id="party" @if(!$needCommit) disabled @endif>
                                        <option value="中共党员">中共党员</option>
                                        <option value="中共预备党员">中共预备党员</option>
                                        <option value="共青团员">共青团员</option>
                                        <option value="民革党员">民革党员</option>
                                        <option value="民盟盟员">民盟盟员</option>
                                        <option value="民建会员">民建会员</option>
                                        <option value="民进会员">民进会员</option>
                                        <option value="农工党党员">农工党党员</option>
                                        <option value="致公党党员">致公党党员</option>
                                        <option value="九三学社社员">九三学社社员</option>
                                        <option value="台盟盟员">台盟盟员</option>
                                        <option value="无党派人士">无党派人士</option>
                                        <option value="群众">群众</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>团关系</th>
                                <td colspan="3">
                                    <input type="text" class="form-control form-control-sm"
                                           id="relation" value="{{$stuInfo->relation}}" @if(!$needCommit) disabled @endif>
                                </td>
                                <th>绿色通道</th>
                                <td>{{$stuInfo->greenPath}}</td>
                            </tr>
                            <tr>
                                <th>家庭住址</th>
                                <td colspan="5">
                                    <input type="text" class="form-control form-control-sm"
                                           id="homeLocation" value="{{$stuInfo->homeLocation}}" @if(!$needCommit) disabled @endif>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <button type="button" class="btn btn-primary" id="commitInfo"
                            @if(!$needCommit) disabled @endif>
                        @if(!$needCommit) 已经核验 @else 提交 @endif
                    </button>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Wuhan Polytechnic University , Jinyinhu</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">确认退出？</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">选择“退出”退出登录</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">取消</button>
                <a class="btn btn-primary" href="{{url($toLogoutURL)}}">退出</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.js"
        integrity="sha256-pVreZ67fRaATygHF6T+gQtF1NI700W9kzeAivu6au9U="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.easing@1.4.1/jquery.easing.min.js"
        integrity="sha256-H3cjtrm/ztDeuhCN9I4yh4iN2Ybx/y1RM7rMmAesA0k=" crossorigin="anonymous"></script>
<!-- Custom scripts for all pages-->
<script src="{{asset('js/sb-admin-2.min.js')}}"></script>

<!-- Smallpop -->
<script src="{{asset('js/spop.js')}}"></script>


<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function () {
        $("#party option[value='{{$stuInfo->party}}']").attr('selected',true);
        $("#nation option[value='{{$stuInfo->nation}}']").attr('selected',true);
    });

    $("#commitInfo").click(function(){
        let id              = $("#name").data('target');
        let phone           = $("#phone").val();
        let nation          = $("#nation").val();
        let party           = $("#party").val();
        let relation        = $("#relation").val();
        let homeLocation    = $("#homeLocation").val();
        // TODO commit the information
        $.ajax({
            async: true,   		//是否为异步请求
            cache: false,  		//是否缓存结果
            type: "POST", 		//请求方式
            dataType: "jsonp", 	//服务器返回的数据是什么类型
            url: "{{url($commitInfoURL)}}",
            data: {'target':id,
                'phone':phone,
                'nation':nation,
                'party':party,
                'relation':relation,
                'homeLocation':homeLocation
            },
            success: function (data) {
                if (data.code === 200) {
                    spop({
                        template: "保存成功",
                        style: 'success',
                        autoclose: 5000,
                        position: 'bottom-right',
                        icon: true,
                        group: "commitInfo",
                    });
                } else {
                    spop({
                        template: "<h4>信息提交失败（" + data.code + "）</h4>" +
                            "<p>" + data.data + "</p>",
                        style: 'warning',
                        autoclose: false,
                        position: 'bottom-right',
                        icon: true,
                        group: "commitInfo",
                    });
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                // 状态码
                console.log("status:" + XMLHttpRequest.status + "\n");
                // 状态
                console.log("readyState:" + XMLHttpRequest.readyState + "\n");
                // 错误信息
                console.log("textStatus:" + textStatus + "\n");
                spop({
                    template: "信息提交失败（" + XMLHttpRequest.status + "）",
                    style: 'error',
                    autoclose: false,
                    position: 'bottom-right',
                    icon: true,
                    group: "commitInfo",
                });
            }
        });

    });
</script>

</body>
</html>
