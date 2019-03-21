<div class="navbar-collapse collapse clearfix">
    <ul class="navigation clearfix">
        <li @if($current=="inicio") class="current" @else class="" @endif>
            <a href="/">Início</a>
        </li>
        <li @if($current=="sobre") class="current" @else class="" @endif >
        <a href="/sobre">Sobre nós</a>
        </li>
        <li @if($current=="produtos") class="current dropdown" @else class="dropdown" @endif >
        <a href="#">Produtos</a>
            <ul>
                <li><a href="/produtos">Todos</a></li>
                <li><a href="/produto">Misturador Braço Simples</a></li>
                <li><a href="/produto">Misturador Braço Duplo</a></li>
                <li><a href="/produto">Misturador Móvel</a></li>
                <li><a href="/produto">Fast Loop</a></li>
                <li><a href="/produto">Rollover</a></li>
                <li><a href="/produto">Área de vazamento - Resfriamento</a></li>
                <li><a href="/produto">Moldagem Carrocel 4 Estações</a></li>
                <li><a href="/produto">Sistema de Pintura por Lavagem</a></li>
                <li><a href="/produto">Shake-Out</a></li>
                <li><a href="/produto">Pré-Resfriador</a></li>
                <li><a href="/produto">Transporte Pneumático</a></li>
                <li><a href="/produto">Recuperação Mecânica - 4 T/H</a></li>
                <li><a href="/produto">Recuperação Mecânica - 6 a 30 T/H</a></li>
                <li><a href="/produto">Regeneração Térmica - 0,5 a 6 T/H</a></li>
                <li><a href="/produto">Jato de Passagem Contínua</a></li>
                <li><a href="/produto">Jato Gancheira de Passagem</a></li>
                <li><a href="/produto">Jato com Gancheira tipo Y</a></li>
                <li><a href="/produto">Jateamento de Bobinas</a></li>
                <li><a href="/produto">Jato Mesa Giratória</a></li>
                <li><a href="/produto">Jato por Tamboreamento</a></li>
                <li><a href="/produto">Preparação de Carga Metálica e Aditivos</a></li>
                <li><a href="/produto">Ponte Rolante com Canguru e Carro de Carregamento</a></li>
                <li><a href="/produto">Filtros para Todos os Processos de Fundição</a></li>
            </ul>
        </li>
        <li @if($current=="projetos") class="current" @else class="" @endif >
        <a href="/projetos">Projetos</a>
        </li>
        <li @if($current=="contato") class="current dropdown" @else class="dropdown" @endif >
        <a href="#">Contato</a>
            <ul>
                <li><a href="/contato/kuttnernobake">Kuttner No-Bake Solutions</a></li>
                <li><a href="/contato/kuttnerbrasil">Kuttner do Brasil</a></li>
                <li><a href="/contato/grupokuttner">Grupo Kuttner</a></li>
            </ul>
        </li>
    </ul>
</div>