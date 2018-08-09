	<aside class="main-sidebar">
	    <!-- sidebar: style can be found in sidebar.less -->
	    <section class="sidebar">
	      <!-- Sidebar user panel -->
	      <div class="user-panel">
	        <div class="pull-left image">
	          <img src="{{asset('img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
	        </div>
	        <div class="pull-left info" style="bottom: 5;">
			    <p>Paulo Filho</p>
	        </div>
	      </div>
	      <!-- sidebar menu: : style can be found in sidebar.less -->
	      <ul class="sidebar-menu" data-widget="tree">
	        <li class="active treeview">
	          <a href="#">
	            <i class="fa fa-clock-o"></i> <span>Funcionários</span>
	            <span class="pull-right-container">
	              <i class="fa fa-angle-left pull-right"></i>
	            </span>
	          </a>
	          <ul class="treeview-menu">
	            <li>
	            	<a href="{{route('employee.list')}}">
	            		<i class="fa fa-list o"></i>
	            		Lista
	            	</a>
	            </li>
	          </ul>
	        </li>
	        <li class="treeview">
	          <a href="#">
	            <i class="fa fa-calendar"></i> <span>Registros</span>
	            <span class="pull-right-container">
	              <i class="fa fa-angle-left pull-right"></i>
	            </span>
	          </a>
	          <ul class="treeview-menu">
	            <li>
	            	<a href="{{route('register.list')}}">
	            		<i class="fa fa-list o"></i>
	            		Lista
	            	</a>
	            </li>
	          </ul>
	        </li>
	        <li class="treeview">
	          <a href="#">
	            <i class="fa fa-cogs"></i> <span>Configurações</span>
	            <span class="pull-right-container">
	              <i class="fa fa-angle-left pull-right"></i>
	            </span>
	          </a>
	          <ul class="treeview-menu">
	            <li>
	            	<a href="{{route('admin.list')}}">
	            		<i class="fa fa-users"></i>
	            		Usuários
	            	</a>
	            </li>
	          </ul>
	        </li>
	      </ul>
	    </section>
    </aside>