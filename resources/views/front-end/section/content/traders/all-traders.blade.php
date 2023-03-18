@extends('front-end.master')
@section('title')
    All Traders
@endsection

@push('page-style')
    <style>
        .in-testimonial-7 .uk-card {
            padding-top: 0px;
            padding-bottom: 0px;
        }

        .uk-card-body {
            display: flow-root;
            padding: 0px 30px;
        }
    </style>
@endpush

@section('breadcrumb')
    @include('front-end.breadcrumb')
@endsection

@section('content')
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-3-4@m">
                    <div data-uk-grid>
                        <div class="uk-width-1-2@s">
                            <h1 class="uk-margin-remove">Our All Traders.
                            </h1>
                            <p class="uk-text-lead uk-text-muted uk-margin-small-top">To engage traders so their
                                companies can grow</p>
                            <p>Traders buy and sell financial instruments traded in the stock markets, derivatives markets
                                and commodity markets, comprising the stock exchanges, derivatives exchanges, and the
                                commodities exchanges.</p>
                        </div>
                        <div class="uk-width-1-2@m">
                            <div class="uk-margin-large" data-uk-grid>
                                <div class="uk-width-1-3@m">
                                    <h1 class="uk-text-primary uk-text-right@m">
                                        <span class="count" data-counter-end="3356">0</span>
                                    </h1>
                                    <hr class="uk-divider-small uk-text-right@m">
                                </div>
                                <div class="uk-width-expand@m">
                                    <h4>In All Traders</h4>
                                    <p>A trader is a person, firm, or entity in finance who buys and sells financial
                                        instruments, such as forex, cryptocurrencies, stocks.</p>
                                </div>
                            </div>
                            <div class="uk-margin-large" data-uk-grid>
                                <div class="uk-width-1-3@m">
                                    <h1 class="uk-text-primary uk-text-right@m">
                                        <span class="count" data-counter-end="10238">0</span>
                                    </h1>
                                    <hr class="uk-divider-small uk-text-right@m">
                                </div>
                                <div class="uk-width-expand@m">
                                    <h4>Business Launch</h4>
                                    <p>At vero eos et accusamus iusto dignissimos ducimus qui blanditiis praesentium
                                        voluta deleniti.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section uk-padding-remove-top">
        <div class="uk-container">
            <div class="uk-grid uk-child-width-1-2@s
uk-child-width-1-4@m in-testimonial-7"
                data-uk-grid>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-1.png') }}" alt="client-logo" width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    Sono molto soddisfatto degli investimenti che ho fatto con questa azienda. Il team è
                                    molto professionale e i rendimenti sono eccellenti.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Marco P<br><cite>Italian</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-2.png') }}" alt="client-logo" width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    Jeg er meget tilfreds med mine investeringer i dette firma. Teamet er meget kompetent
                                    og afkastet er fremragende.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Lars H<br><cite>Danish</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-3.png') }}" alt="client-logo" width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    Estoy muy contento con las inversiones que he hecho con esta empresa. El equipo es
                                    muy profesional y los retornos son excelentes.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Maria S<br><cite>Spanish</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-4.png') }}" alt="client-logo" width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    Je suis très satisfait de mes investissements avec cette entreprise. L'équipe est
                                    très professionnelle et les rendements sont excellents.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Pierre L<br><cite>French</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-5.png') }}" alt="client-logo" width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    Ich bin sehr zufrieden mit den Investitionen, die ich bei diesem Unternehmen getätigt
                                    habe. Das Team ist sehr kompetent und die Renditen sind ausgezeichnet.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Katrin W<br><cite>German</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-6.png') }}" alt="client-logo" width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    Eu estou muito satisfeito com os meus investimentos nesta empresa. A equipe é muito
                                    profissional e os retornos são excelentes.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Marcos S<br><cite>Portuguese</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-7.png') }}" alt="client-logo" width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    私はこの会社での投資に非常に満足しています。チームは非常にプロフェッシ
                                    ョナルで、リターンも優れています。
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>佐藤健太郎<br><cite>Japanese</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-8.png') }}" alt="client-logo" width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    Ik ben erg tevreden over de investeringen die ik bij dit bedrijf heb gedaan. Het team
                                    is zeer deskundig en de rendementen zijn uitstekend.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Pieter V<br><cite>Dutch</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-9.png') }}" alt="client-logo" width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    Jeg er veldig fornøyd med investeringene mine i dette selskapet. Teamet er veldig
                                    profesjonelt og avkastningen er utmerket.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Anna L<br><cite>Norwegian</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-1.png') }}" alt="client-logo" width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    Tôi rất hài lòng với các khoản đầu tư của mình với công ty này. Đội ngũ làm việc rất
                                    chuyên nghiệp và lợi nhuận rất tốt.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Hoàng A<br><cite>Vietnamese</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-2.png') }}" alt="client-logo" width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    Je suis très content de mes investissements avec cette entreprise. L'équipe est très
                                    professionnelle et les rendements sont excellents.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Marie F<br><cite>French</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-3.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    Ich bin mit den Investitionen, die ich bei diesem Unternehmen getätigt habe, sehr
                                    zufrieden. Das Team ist sehr kompetent und die Renditen sind ausgezeichnet.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Christian K<br><cite>German</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-4.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    Estou muito satisfeito com os meus investimentos nesta empresa. A equipa é muito
                                    profissional e os retornos são excelentes.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Ana M<br><cite>Portuguese</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-5.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    "Ik ben zeer tevreden over de investeringen die ik heb gedaan bij dit bedrijf. Het
                                    team is zeer deskundig en de rendementen zijn uitstekend.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Anja V<br><cite>Dutch</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-6.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    私はこの会社での投資に非常に満足しています。チームは非常にプロフェッシ
                                    ョナルで、リターンも優れています。
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Kenji S<br><cite>Japanese</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-7.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    Jeg er meget tilfreds med mine investeringer i dette firma. Teamet er meget
                                    kompetent og afkastet er fremragende.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Lars H<br><cite>Danish</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-8.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    Estoy muy contento con las inversiones que he hecho con esta empresa. El equipo es
                                    muy profesional y los retornos son excelentes.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Maria S<br><cite>Spanish</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-9.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>Sono molto soddisfatto degli investimenti che ho fatto con questa azienda. Il team è
                                    molto professionale e i rendimenti sono eccellenti.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Marco P<br><cite>Italian</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-1.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>Jeg er veldig fornøyd med investeringene mine med dette selskapet. Teamet er veldig
                                    kompetent og avkastningen er utmerket.

                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Lars T<br><cite>Norwegian</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-2.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    Eu estou muito feliz com os meus investimentos nesta empresa. A equipe é muito
                                    profissional e os retornos são excelentes.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Rafaela F<br><cite>Portuguese</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>


                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-3.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    I've been investing with this company for a few years now and I've never been
                                    disappointed. The team is professional, knowledgeable, and always available to answer
                                    my questions.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Sarah J<br><cite>New York</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-4.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    I was hesitant to invest at first, but the team was very patient in addressing my
                                    concerns and guiding me through the process. I'm glad I took the plunge.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Alex M<br><cite>New York</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-5.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    The returns on my investment have exceeded my expectations. I feel confident leaving
                                    my money in the hands of this trustworthy company.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Mark K<br><cite>New York</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-6.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    I appreciate how the team takes the time to explain the markets they invest in and
                                    the strategies they use. It shows that they care about their clients' understanding of
                                    their investments.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Jenna L<br><cite>New York</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-7.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    I've recommended this company to several of my friends and family members. They've
                                    all been pleased with their investment returns and the level of service they've
                                    received.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Tom S<br><cite>New York</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-8.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    I appreciate the transparency and accountability this company provides. I always
                                    know
                                    exactly where my money is going and how it's performing.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Rachel T<br><cite>New York</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-9.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    The customer service is exceptional. The team is always friendly, helpful, and quick
                                    to respond to my inquiries.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Eric B<br><cite>New York</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-1.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    I love how easy it is to invest with this company. The process is simple,
                                    straightforward, and hassle-free.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Lisa M<br><cite>New York</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-2.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    The team is always on top of the latest market trends and developments. It's
                                    reassuring to know that they're working hard to maximize my returns.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Michael P<br><cite>New York</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-2.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    I've been investing with this company for several months and have already seen
                                    significant returns on my investment. I'm excited to see what the future holds.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Kelly D<br><cite>New York</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-3.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    I appreciate the level of personalized service I receive from this company. They
                                    take the time to understand my investment goals and tailor their approach accordingly.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Emily R<br><cite>New York</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-4.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    I was impressed with how knowledgeable and experienced the team is. They've been
                                    able to consistently generate strong returns on my investments.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>David H<br><cite>New York</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-5.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    The team is always available to answer my questions and provide guidance. They've
                                    been a great partner in helping me achieve my financial goals.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Jessica L<br><cite>New York</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-6.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    I've invested in multiple markets with this company and have been pleased with the
                                    returns across the board. It's clear that they do their due diligence before investing
                                    in any market.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Ryan S<br><cite>New York</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-2.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    I appreciate how this company is always looking for new investment opportunities
                                    and staying ahead of the curve. It gives me confidence in their ability to generate
                                    strong
                                    returns.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Amy T<br><cite>New York</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-7.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    The level of communication from the team is impressive. They keep me updated on my
                                    investments and provide regular reports that are easy to understand.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Ben W<br><cite>New York</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-8.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    I was hesitant to invest in some of the markets they offered, but the team was very
                                    patient in explaining the risks and potential rewards. I appreciate how transparent they
                                    are about the investments they make.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Kelly P<br><cite>New York</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-9.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    The fees for investing with this company are very reasonable compared to other
                                    investment firms I've looked into. It's a great value for the level of service and
                                    returns I receive.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Jake C<br><cite>New York</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-1.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    I appreciate the fact that this company prioritizes their clients' interests above
                                    their own. It's clear that they genuinely care about helping their clients succeed.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Laura M<br><cite>New York</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-2.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>
                                    The ease of use and convenience of investing with this company is a huge plus. I
                                    don't have to worry about managing my investments myself and can trust them to do it for
                                    me.
                                </p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>John D<br><cite>New York</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
@endsection

@push('page-script')
@endpush
