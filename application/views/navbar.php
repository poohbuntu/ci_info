<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=base_url()?>sites/index">
          <i class="fa fa-home"></i>
          PNC-info
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-users"></i>
              การบริหาร
              <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li class="dropdown-header">
                <i class="fa fa-money"></i>
                การเงิน
            </li>
                <li><a href="<?=base_url()?>budgets/index">ข้อมูลเงินงบประมาณ</a></li>
                <li><a href="<?=base_url()?>earnings/index">ข้อมูลเงินรายได้</a></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header">
                <i class="fa fa-user"></i>
                บุคคลากร
            </li>
                <li><a href="<?=base_url()?>persons/index">ข้อมูลรวม</a></li>
                <li><a href="<?=base_url()?>persons/teacher">ข้อมูกลุ่มอาจารย์</a></li>
                <li><a href="<?=base_url()?>persons/vacations">การลา</a></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header">
                <i class="fa fa-briefcase"></i>
                ครุภัณฑ์
            </li>
                <li><a href="<?=base_url()?>budgets/index">ครุภัณฑ์</a></li>
            <li role="separator" class="divider"></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-graduation-cap"></i>
              การเรียนการสอน
              <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?=base_url()?>budgets/index">ตารางสอน</a></li>
            <li><a href="#">จำนวนนักศึกษา</a></li>
            <li role="separator" class="divider"></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-book"></i>
              การวิจัย
              <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?=base_url()?>researchs/index">งานวิจัย</a></li>
            <li><a href="#">บทคัดย่อ</a></li>
            <li role="separator" class="divider"></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-file-text"></i>
              การบริการวิชาการ
              <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?=base_url()?>socials/index">โครงการบริการวิชาการ</a></li>
            <li role="separator" class="divider"></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-smile-o"></i>
              ศิลปะและวัฒนธรรม
              <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?=base_url()?>activities/index">กิจกรรมนักศึกษา</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?=base_url()?>cultures/index">โครงการทำนุบำรุงศิลปะและวัฒนธรรม</a></li>
            <li role="separator" class="divider"></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
