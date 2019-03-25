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
                <li><a href="/produtos/Misturadores">Misturadores</a></li>
                <li><a href="/produtos/SistemaMoldagemVazamentoRefriamento">Sistema de Moldagem - Vazamento - Refriamento</a></li>
                <li><a href="/produtos/SistemaDesmoldagem">Sistema de Desmoldagem</a></li>
                <li><a href="/produtos/RecuperacaoMecanicaRegeneracaoTermica">Recuperação e Regeneração de Areia</a></li>
                <li><a href="/produtos/MaquinasJatoGranalha">Máquinas Jato de Granalha</a></li>
                <li><a href="/produtos/PreparacaoCargaCarregamentoForno">Preparação de Carga Carregamento de Forno</a></li>
                <li><a href="/produtos/DespoeiramentoLimpezaGases">Despoeiramento e Limpeza de Gases</a></li>
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
                <li><a href="/contato/grupokuttner">Grupo Küttner</a></li>
            </ul>
        </li>
    </ul>
</div>