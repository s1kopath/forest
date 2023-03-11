<style>
    .mobile-bottom-nav {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 1000;
        will-change: transform;
        transform: translateZ(0);
        display: flex;
        height: 60px;
        background-color: #091b65;
        color: white;
    }

    .mobile-bottom-nav__item {
        flex-grow: 1;
        text-align: center;
        font-size: 15px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .mobile-bottom-nav__item--active {
        color: #ff6600 !important;
    }

    .mobile-bottom-nav__item-content {
        display: flex;
        flex-direction: column;
        color: white;
    }
</style>

<div class="p-4 d-block d-lg-none">
    {{-- empty div for spacing --}}
</div>

@php
    $route_name = request()
        ->route()
        ->getName();
    
@endphp

<nav class="mobile-bottom-nav d-lg-none">
    <div class="mobile-bottom-nav__item ">
        <a href="{{ route('public_dashboard') }}"
            class="mobile-bottom-nav__item-content {{ $route_name == 'public_dashboard' ? 'mobile-bottom-nav__item--active' : '' }}">
            <i class="fas fa-th-large"></i>
            Dashboard
        </a>
    </div>
    <div class="mobile-bottom-nav__item">
        <a href="{{ route('stake') }}"
            class="mobile-bottom-nav__item-content {{ $route_name == 'stake' ? 'mobile-bottom-nav__item--active' : '' }}">
            <i class="far fa-money-bill-alt"></i>
            Staking
        </a>
    </div>
    <div class="mobile-bottom-nav__item">
        <a href="{{ route('public_fund') }}"
            class="mobile-bottom-nav__item-content {{ $route_name == 'public_fund' ? 'mobile-bottom-nav__item--active' : '' }}">
            <i class="fa fa-shopping-bag"></i>
            Fund
        </a>
    </div>

    <div class="mobile-bottom-nav__item">
        <a href="{{ route('public_history') }}"
            class="mobile-bottom-nav__item-content {{ $route_name == 'public_history' ? 'mobile-bottom-nav__item--active' : '' }}">
            <i class="fas fa-history"></i>
            History
        </a>
    </div>
</nav>
