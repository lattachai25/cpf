
<div class="nav-side-menu">
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

        <div class="menu-list">

            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="{{ route('meetings.index') }}">
                  <i class="fa fa-dashboard fa-lg"></i> แสดงรายงานการประชุม
                  </a>
                </li>

                <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                  <a href="#"><i class="fa fa-gift fa-lg"></i> วาระการประชุม <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li class="active"><a href="{{ route('seriesmeting.create') }}">เพิ่ม วาระ</a></li>
                    <li><a href="{{ route('seriesmeting.index') }}">แก้ไข วาระ</a></li>
                </ul>
                <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i> วาระย่อย<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="service">
                  <li><a href="{{ route('setmeting.create') }}">เพิ่ม วาระย่อย</a></li>
                  <li><a href="{{ route('setmeting.index') }}">แก้ไข วาระย่อย</a></li>
                </ul>

                <li  data-toggle="collapse" data-target="#board" class="collapsed active">
                    <a href="#"><i class="fa fa-gift fa-lg"></i>จัดคณะกรรมการ <span class="arrow"></span></a>
                  </li>
                  <ul class="sub-menu collapse" id="board">
                        <li><a href="{{ route('board.index') }}">รายงานกลุ่มคณะกรรมการ</a></li>
                      <li class="active"><a href="{{ route('board.create') }}">เพิ่ม กลุ่มคณะกรรมการ</a></li>
                  </ul>

                  <li  data-toggle="collapse" data-target="#meetings" class="collapsed active">
                        <a href="#"><i class="fa fa-gift fa-lg"></i>จัดประชุม <span class="arrow"></span></a>
                      </li>
                      <ul class="sub-menu collapse" id="meetings">
                            <li><a href="{{ route('meetings.index') }}">รายงาน</a></li>
                          <li class="active"><a href="{{ route('meetings.create') }}">เพิ่ม จัดประชุม</a></li>
                      </ul>

                      <li  data-toggle="collapse" data-target="#sandmail" class="collapsed active">
                            <a href="#"><i class="fa fa-gift fa-lg"></i>ส่งเมล์เชิญประชุม <span class="arrow"></span></a>
                          </li>
                          <ul class="sub-menu collapse" id="sandmail">
                                <li><a href="{{ route('sandmail.index') }}">ส่งเมล์เชิญประชุม</a></li>
                          </ul>

            </ul>
     </div>
</div>
