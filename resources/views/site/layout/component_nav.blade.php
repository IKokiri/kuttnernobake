<div class="navbar-collapse collapse clearfix">
    <ul class="navigation clearfix">
        <li @if($current=="inicio") class="current dropdown" @else class="dropdown" @endif>
            <a href="#">Início</a>
            <ul>
                <li><a href="/">Início</a></li>
            </ul>
        </li>
        <li @if($current=="sobre") class="current dropdown" @else class="dropdown" @endif >
        <a href="#">Sobre nós</a>
            <ul>
                <li><a href="/sobre">Sobre nós</a></li>
            </ul>
        </li>
        <li @if($current=="produtos") class="current dropdown" @else class="dropdown" @endif >
        <a href="#">Produtos</a>
            <ul>
                <li><a href="/produtos">Produtos</a></li>
            </ul>
        </li>
        <li @if($current=="projetos") class="current dropdown" @else class="dropdown" @endif >
        <a href="#">Projetos</a>
            <ul>
                <li><a href="/projetos">Projetos</a></li>
            </ul>
        </li>
        <li @if($current=="contato") class="current dropdown" @else class="dropdown" @endif >
        <a href="#">Contato</a>
            <ul>
                <li><a href="/contato/kuttnernobake">Kuttner No-Bake Solutions</a></li>
                <li><a href="/contato/kuttnerbrasil">Kuttner do Brasil</a></li>
                <li><a href="/contato/kuttneralemanha">Küttner Alemanha</a></li>
            </ul>
        </li>
    </ul>
</div>