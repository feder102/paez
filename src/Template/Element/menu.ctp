<aside class="sidebar">
    <div id="leftside-navigation" class="nano">
        <ul class="nano-content">
            <li class="active">
                <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-user-circle-o')).'Clientes', array('controller' => 'clientes', 'action' => 'index'), array('escape' => false)) ?>
            </li>
            <li>
              <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-bar-chart')).'Estadisticas', array('controller' => 'comprobantes', 'action' => 'dashboard'), array('escape' => false)) ?>
            </li>
            <li>
              <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-file-text')).'Resumen diario', array('controller' => 'comprobantes', 'action' => 'dashboard'), array('escape' => false)) ?>
              <!-- una grilla con los datos de las cuotas cobradas osea estado_VTO=CAN; -->
              <!-- cod_cliente; razon_social; cod_vended; n_comp_can; fecha_can;importe_vt -->
              <!-- unir 3 tablas clientes, comprobantes, cuotas -->
            </li>
            <li>
              <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-user-o')).'Usuarios', array('controller' => 'comprobantes', 'action' => 'dashboard'), array('escape' => false)) ?>
            </li>
            <li>
              <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-pencil-square-o')).'Editar cuotas', array('controller' => 'comprobantes', 'action' => 'dashboard'), array('escape' => false)) ?>
            </li>
            <li>
              <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-map-marker')).'Localizacion cobrador', array('controller' => 'comprobantes', 'action' => 'dashboard'), array('escape' => false)) ?>
            </li>
            <li>
              <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-sign-out')).'Cerrar sesion', array('controller' => 'comprobantes', 'action' => 'dashboard'), array('escape' => false)) ?>
            </li>
            <!-- <li class="sub-menu">
                <?php //$this->Html->link(__('Cuotas'), ['controller'=>'Cuotas','action' => 'index']) ?>
                <a href=""><i class="fa fa-cogs"></i><span>UI Elements</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                <ul>
                    <li><a href="ui-alerts-notifications.html">Alerts &amp; Notifications</a>
                    </li>
                    <li><a href="ui-panels.html">Panels</a>
                    </li>
                    <li><a href="ui-buttons.html">Buttons</a>
                    </li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href=""><i class="fa fa-table"></i><span>Tables</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                <ul>
                    <li><a href="tables-basic.html">Basic Tables</a>
                    </li>
                    <li><a href="tables-data.html">Data Tables</a>
                    </li>
                </ul>
            </li> -->
        </ul>
    </div>
</aside>
