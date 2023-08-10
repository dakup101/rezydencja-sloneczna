<header>
    <div class="site-header"
         data-site_header>
        <div class="site-container">
            <a href="<?php echo get_home_url() ?>"
               class="site-header__logo">
                <img src="<?php echo THEME_URI . '/assets/images/logo-brown.svg' ?>"
                     alt="Słoneczna ezydencja - Logo"
                     class="site-header__logo--img"
                     loading="lazy">
            </a>
            <nav class="site-header__nav">
                <a href="<?php echo get_home_url() . '/o-inwestycji' ?>"
                   class="site-header__nav--item">
                    O inwestycji
                </a>
                <a href="<?php echo get_home_url() . '/apartaments' ?>"
                   class="site-header__nav--item">
                    Apartamenty
                </a>
                <a href="<?php echo get_home_url() . '/galeria' ?>"
                   class="site-header__nav--item">
                    Galeria
                </a>
                <a href="<?php echo get_home_url() . '/postep-prac' ?>"
                   class="site-header__nav--item">
                    Postęp prac
                </a>
                <a href="<?php echo get_home_url() . '/zwrot-vat' ?>"
                   class="site-header__nav--item">
                    Zwrot VAT
                </a>
                <a href="<?php echo get_home_url() . '/wynajem' ?>"
                   class="site-header__nav--item">
                    Wynajem
                </a>
                <a href="<?php echo get_home_url() . '/kontakt' ?>"
                   class="site-header__nav--item">
                    Kontakt
                </a>
                <a href="tel:+48883663036"
                   class="site-header__nav--tel">
                    <svg width="14"
                         height="16"
                         viewBox="0 0 14 16"
                         fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.3223 7.76299C13.1755 7.76299 13.0454 7.71048 12.932 7.60545C12.8185 7.50043 12.7475 7.36686 12.7189 7.20474C12.5403 5.90094 11.9846 4.78287 11.0516 3.85052C10.1187 2.91818 8.9999 2.36126 7.69524 2.17975C7.53303 2.15426 7.39938 2.08426 7.29429 1.96975C7.18918 1.85526 7.13663 1.7169 7.13663 1.55468C7.13663 1.38053 7.19632 1.23521 7.3157 1.11871C7.43507 1.00221 7.58072 0.956714 7.75264 0.982208C9.37855 1.16823 10.7659 1.83617 11.9146 2.98605C13.0633 4.13593 13.7324 5.52304 13.9218 7.14738C13.9473 7.31918 13.8991 7.46474 13.7772 7.58404C13.6553 7.70334 13.5036 7.76299 13.3223 7.76299ZM9.96966 7.76299C9.84232 7.76299 9.7217 7.71934 9.6078 7.63205C9.49388 7.54476 9.41413 7.42782 9.36856 7.28122C9.24405 6.85946 9.02679 6.49368 8.71677 6.18387C8.40676 5.87406 8.04074 5.65695 7.61871 5.53252C7.4723 5.48513 7.35535 5.40999 7.26786 5.30711C7.18037 5.20424 7.13663 5.08353 7.13663 4.94498C7.13663 4.74227 7.20327 4.58126 7.33655 4.46196C7.46984 4.34267 7.63072 4.30519 7.81918 4.34953C8.49217 4.513 9.0734 4.83988 9.56287 5.33017C10.0524 5.82046 10.3885 6.40403 10.5714 7.08088C10.6127 7.26543 10.5736 7.42525 10.4541 7.56035C10.3345 7.69544 10.1731 7.76299 9.96966 7.76299ZM13.0246 15.0272C11.4563 15.0272 9.89595 14.6417 8.34368 13.8708C6.79141 13.0999 5.39768 12.0972 4.16249 10.8628C2.9273 9.62844 1.92475 8.23561 1.15485 6.68433C0.384951 5.13306 0 3.57376 0 2.00643C0 1.73097 0.0924573 1.50042 0.277372 1.31476C0.462287 1.12908 0.693427 1.03624 0.970792 1.03624H3.64027C3.86575 1.03624 4.06194 1.1067 4.22885 1.24762C4.39576 1.38853 4.50446 1.58382 4.55493 1.8335L5.06236 4.16955C5.09703 4.38764 5.09368 4.58236 5.05231 4.75372C5.01095 4.92508 4.92737 5.07051 4.80157 5.19002L2.86539 7.09376C3.56138 8.23657 4.33586 9.23022 5.18881 10.0747C6.04176 10.9192 7.00354 11.6352 8.07415 12.2227L9.91925 10.3351C10.0712 10.1736 10.2415 10.0611 10.4302 9.9976C10.6189 9.93415 10.8145 9.92611 11.0169 9.97349L13.1977 10.4615C13.4418 10.5198 13.6365 10.6364 13.7819 10.8113C13.9273 10.9863 14 11.1986 14 11.4483V14.0524C14 14.3309 13.9067 14.563 13.72 14.7487C13.5334 14.9343 13.3016 15.0272 13.0246 15.0272ZM2.21362 5.9141L3.75882 4.37821L3.33474 2.33895H1.30355C1.30051 2.82085 1.37316 3.35046 1.52152 3.92778C1.66988 4.5051 1.90058 5.1672 2.21362 5.9141ZM12.6964 13.7153V11.6877L10.7944 11.2953L9.28286 12.8732C9.79153 13.1089 10.3464 13.301 10.9475 13.4496C11.5486 13.5982 12.1316 13.6868 12.6964 13.7153Z"
                              fill="#A17758" />
                    </svg>
                    <span>
                        +48 883 663 036
                    </span>
                </a>
            </nav>
            <label for="mobileMenu"
                   style="color: white">
                <svg xmlns="http://www.w3.org/2000/svg"
                     width="35"
                     height="35"
                     fill="currentColor"
                     class="bi bi-list"
                     viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </label>

        </div>
        <input type="checkbox"
               name="mobileMenu"
               id="mobileMenu">
        <div class="site-header__nav-mobile site-container">
            <div class="py-4 d-flex flex-column w-100">
                <a href="<?php echo get_home_url() . '/o-inwestycji' ?>"
                   class="site-header__nav--item">
                    O inwestycji
                </a>
                <a href="<?php echo get_home_url() . '/apartaments' ?>"
                   class="site-header__nav--item">
                    Apartamenty
                </a>
                <a href="<?php echo get_home_url() . '/galeria' ?>"
                   class="site-header__nav--item">
                    Galeria
                </a>
                <a href="<?php echo get_home_url() . '/zwrot-vat' ?>"
                   class="site-header__nav--item">
                    Zwrot VAT
                </a>
                <a href="<?php echo get_home_url() . '/wynajem' ?>"
                   class="site-header__nav--item">
                    Wynajem
                </a>
                <a href="<?php echo get_home_url() . '/kontakt' ?>"
                   class="site-header__nav--item">
                    Kontakt
                </a>
                <a href="tel:+48883663036"
                   class="site-header__nav--btn w-50 m-auto mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 19.13 19.13"
                         class="site-header__nav--btn__icon">
                        <defs>
                            <style>
                            .b {
                                fill: none;
                                fill-rule: evenodd;
                                stroke: currentColor;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                                stroke-width: 1.13px;
                            }
                            </style>
                        </defs>
                        <path class="b"
                              d="M5.63,13.5C3.87,11.77,.9,8.09,.59,5.17c-.11-1,.14-1.88,.66-2.63,.56-.81,1.43-1.48,2.34-1.84,.64-.25,1.21-.21,1.59,.62l1.8,3.88c.35,.75-.58,1.46-1.11,2.21-.34,.47-.39,.6-.11,1.11,.37,.66,1.21,1.72,2.17,2.69,.97,.96,2.03,1.8,2.69,2.17,.51,.28,.63,.23,1.11-.11,.74-.53,1.45-1.46,2.21-1.11l3.88,1.8c.83,.39,.87,.96,.62,1.59-.35,.91-1.03,1.78-1.84,2.34-.75,.52-1.63,.76-2.63,.66-2.93-.31-6.6-3.28-8.34-5.04Z" />
                    </svg>
                    <span class="site-header__nav--btn__text">Zadzwoń</span>
                </a>
            </div>
        </div>
    </div>

</header>