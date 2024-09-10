<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sorenson
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SORENSON IMPACT GROUP</title>

<?php wp_head(); ?>

</head>
    <header class="header secondary">

        <div class="header__container">

            <div class="header__wrapper">

                <a href="" class="header__logo">
                    <svg width="19" height="35" viewBox="0 0 19 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1_176)">
                        <path d="M19 24.9998C19 30.522 14.566 35 9.09488 35C9.08204 35 9.0692 35 9.05493 35V14.9867C14.5247 14.965 18.9772 19.4243 18.9986 24.9465C18.9986 24.9638 18.9986 24.9811 18.9986 24.9998H19Z" fill="#212322" />
                        <path d="M7.42281 24.9999C7.45848 29.138 4.16579 32.5227 0.0656255 32.5587C0.0442259 32.5587 0.0213996 32.5587 0 32.5587V17.5059C4.09874 17.5059 7.42281 20.8604 7.42281 24.9999Z" fill="#212322" />
                        <path d="M1.67212 7.49403C1.67212 3.37037 4.97194 0.0230453 9.05499 0V14.9866C4.97051 14.965 1.67212 11.6163 1.67212 7.49259V7.49403Z" fill="#212322" />
                        <path d="M10.7417 7.49462C10.7417 4.68885 12.9943 2.41602 15.772 2.41602C15.7763 2.41602 15.7806 2.41602 15.7848 2.41602V12.5876C12.9986 12.5876 10.7402 10.3076 10.7402 7.49462H10.7417Z" fill="#212322" />
                        </g>
                        <defs>
                        <clipPath id="clip0_1_176">
                            <rect width="19" height="35" fill="white" />
                        </clipPath>
                        </defs>
                    </svg>
                </a>

                <div class="header__title">

                    <svg width="273" height="15" viewBox="0 0 273 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.0579 10.848C12.0579 13.372 9.67942 15 6.21154 15C2.54031 15 0.274384 13.4154 0.00203736 10.4101C-0.0197504 10.2429 0.136396 10.0958 0.31796 10.0958H1.94841C2.10818 10.0958 2.24254 10.2229 2.24254 10.3666C2.40232 12.1618 4.01098 13.1212 6.29869 13.1212H6.52383C8.5864 13.1212 9.78835 12.1417 9.78835 10.9316C9.78835 9.72142 8.99673 9.07622 7.31908 8.76198L4.78081 8.28059C2.17355 7.77914 0.292541 6.44529 0.292541 4.17205C0.292541 1.89882 2.53668 0 5.93919 0C9.34171 0 11.5386 1.66815 11.7856 4.27569C11.7856 4.44283 11.6512 4.58993 11.4696 4.58993H9.83919C9.67942 4.58993 9.54506 4.48629 9.52327 4.3392C9.29813 2.8382 7.91461 1.87876 6.05539 1.87876H5.83025C3.90567 1.87876 2.54394 2.8382 2.54394 4.15199C2.54394 5.23847 3.85846 5.94718 5.21656 6.19791L7.75484 6.65589C10.609 7.1774 12.0615 8.57477 12.0615 10.848H12.0579Z" fill="#212322" />
                        <path d="M28.1433 7.50167C28.1433 11.6391 24.7611 15 20.6049 15C16.4486 15 13.0664 11.6358 13.0664 7.50167C13.0664 3.36755 16.4453 0 20.6049 0C24.7645 0 28.1433 3.3642 28.1433 7.50167ZM26.0433 7.50167C26.0433 4.51573 23.6068 2.09217 20.6049 2.09217C17.6029 2.09217 15.1664 4.51573 15.1664 7.50167C15.1664 10.4876 17.6029 12.9112 20.6049 12.9112C23.6068 12.9112 26.0433 10.4876 26.0433 7.50167Z" fill="#212322" />
                        <path d="M55.282 13.3696V14.7008C55.282 14.8727 55.1557 15 54.985 15H45.1199C44.6284 15 44.2256 14.5907 44.2256 14.0988V0.901169C44.2256 0.40587 44.6318 0 45.1199 0H54.77C54.9406 0 55.0669 0.127264 55.0669 0.299243V1.63036C55.0669 1.80234 54.9406 1.9296 54.77 1.9296H46.6526C46.4819 1.9296 46.3556 2.06031 46.3556 2.22885V6.02958C46.3556 6.18092 46.4819 6.32882 46.6526 6.32882H53.4899C53.6606 6.32882 53.7869 6.45609 53.7869 6.60743V7.95918C53.7869 8.11053 53.6606 8.23779 53.4899 8.23779H46.6526C46.4819 8.23779 46.3556 8.38913 46.3556 8.53703V12.7643C46.3556 12.9363 46.4819 13.0635 46.6526 13.0635H54.9816C55.1523 13.0635 55.2786 13.1942 55.2786 13.3628L55.282 13.3696Z" fill="#212322" />
                        <path d="M69.3501 0.299106V14.6975C69.3501 14.8694 69.2233 14.9966 69.0519 14.9966H66.7212C66.5087 14.9966 66.2927 14.89 66.1865 14.6975L59.705 3.09076C59.6193 2.96356 59.4274 3.00481 59.4274 3.15609V14.7009C59.4274 14.8728 59.3005 15 59.1292 15H57.5902C57.4188 15 57.292 14.8728 57.292 14.7009V0.299106C57.292 0.127206 57.4188 0 57.5902 0H59.9449C60.1574 0 60.3528 0.106578 60.4591 0.299106L66.9405 11.9299C67.0262 12.0605 67.2182 12.0158 67.2182 11.8645V0.299106C67.2182 0.127206 67.369 0 67.5164 0H69.0553C69.2267 0 69.3535 0.127206 69.3535 0.299106H69.3501Z" fill="#212322" />
                        <path d="M82.4197 10.848C82.4197 13.372 80.2388 15 77.0589 15C73.6926 15 71.6149 13.4154 71.3651 10.4101C71.3452 10.2429 71.4883 10.0958 71.6548 10.0958H73.1499C73.2964 10.0958 73.4196 10.2229 73.4196 10.3666C73.5661 12.1618 75.0411 13.1212 77.1388 13.1212H77.3453C79.2365 13.1212 80.3386 12.1417 80.3386 10.9316C80.3386 9.72142 79.6128 9.07622 78.0745 8.76198L75.747 8.28059C73.3563 7.77914 71.6315 6.44529 71.6315 4.17205C71.6315 1.89882 73.6893 0 76.8059 0C79.9224 0 81.9402 1.66815 82.1666 4.27569C82.1666 4.44283 82.0434 4.58993 81.877 4.58993H80.3819C80.2354 4.58993 80.1122 4.48629 80.0922 4.3392C79.8858 2.8382 78.6172 1.87876 76.9124 1.87876H76.706C74.9412 1.87876 73.6926 2.8382 73.6926 4.15199C73.6926 5.23847 74.8979 5.94718 76.1432 6.19791L78.4707 6.65589C81.0878 7.1774 82.4197 8.57477 82.4197 10.848Z" fill="#212322" />
                        <path d="M99.5076 7.50167C99.5076 11.6391 96.1254 15 91.9691 15C87.8129 15 84.4307 11.6358 84.4307 7.50167C84.4307 3.36755 87.8095 0 91.9691 0C96.1287 0 99.5076 3.3642 99.5076 7.50167ZM97.4076 7.50167C97.4076 4.51573 94.9711 2.09217 91.9691 2.09217C88.9672 2.09217 86.5307 4.51573 86.5307 7.50167C86.5307 10.4876 88.9672 12.9112 91.9691 12.9112C94.9711 12.9112 97.4076 10.4876 97.4076 7.50167Z" fill="#212322" />
                        <path d="M113.576 0.299106V14.6975C113.576 14.8694 113.449 14.9966 113.277 14.9966H110.947C110.734 14.9966 110.518 14.89 110.412 14.6975L103.931 3.09076C103.845 2.96356 103.653 3.00481 103.653 3.15609V14.7009C103.653 14.8728 103.526 15 103.355 15H101.816C101.644 15 101.518 14.8728 101.518 14.7009V0.299106C101.518 0.127206 101.644 0 101.816 0H104.171C104.383 0 104.578 0.106578 104.685 0.299106L111.166 11.9299C111.252 12.0605 111.444 12.0158 111.444 11.8645V0.299106C111.444 0.127206 111.595 0 111.742 0H113.281C113.452 0 113.579 0.127206 113.579 0.299106H113.576Z" fill="#212322" />
                        <path d="M39.1797 7.70977C40.3676 7.13549 41.2107 5.77373 41.2107 4.0784C41.2107 1.74003 39.2718 0 36.5444 0H31.0486C30.5571 0 30.1543 0.409216 30.1543 0.900963V14.7008C30.1543 14.8728 30.2806 15 30.4513 15H31.9839C32.1546 15 32.2809 14.8728 32.2809 14.7008V9.29161C32.2809 9.1403 32.4072 8.99243 32.5779 8.99243H37.1725C38.1112 9.0784 38.8554 9.87964 38.8554 10.8459V14.6871C38.8554 14.859 38.9953 15 39.166 15H40.6953C40.8659 15 41.0059 14.859 41.0059 14.6871V11.0591C41.0059 9.64924 40.2754 8.41472 39.1762 7.70633L39.1797 7.70977ZM32.2843 2.23521C32.2843 2.06327 32.4106 1.93604 32.5813 1.93604H36.2235C38.0122 1.93604 39.0773 2.79574 39.0773 4.40509C39.0773 5.92847 38.0122 7.08734 36.2235 7.08734H32.5813C32.4106 7.08734 32.2843 6.93604 32.2843 6.78817V2.23521Z" fill="#212322" />
                        <path d="M123.589 0.299174V14.7008C123.589 14.8728 123.47 15 123.309 15H121.86C121.698 15 121.579 14.8728 121.579 14.7008V0.299174C121.579 0.127235 121.698 0 121.86 0H123.309C123.47 0 123.589 0.127235 123.589 0.299174Z" fill="#212322" />
                        <path d="M141.679 0.299106V14.6975C141.679 14.8694 141.559 14.9966 141.397 14.9966H139.938C139.776 14.9966 139.656 14.8694 139.656 14.6975V2.74696C139.656 2.57506 139.432 2.55443 139.393 2.70571L135.56 14.8075C135.521 14.914 135.398 15 135.277 15H133.088C132.988 15 132.864 14.914 132.825 14.8075L128.892 2.70571C128.853 2.55443 128.629 2.57506 128.629 2.74696V14.6975C128.629 14.8694 128.509 14.9966 128.346 14.9966H126.888C126.726 14.9966 126.605 14.8694 126.605 14.6975V0.299106C126.605 0.127206 126.726 0 126.888 0H129.766C129.886 0 129.99 0.0859492 130.029 0.192527L134.063 12.5728C134.102 12.7 134.287 12.7 134.326 12.5728L138.279 0.192527C138.318 0.0859492 138.421 0 138.542 0H141.4C141.562 0 141.682 0.127206 141.682 0.299106H141.679Z" fill="#212322" />
                        <path d="M155.75 4.54952C155.75 7.40371 153.726 9.0784 150.978 9.0784H147.121C146.95 9.0784 146.824 9.22971 146.824 9.37758V14.7008C146.824 14.8728 146.698 15 146.527 15H144.994C144.824 15 144.697 14.8728 144.697 14.7008V0.900964C144.697 0.405778 145.103 0 145.592 0H150.982C153.729 0 155.754 1.69532 155.754 4.54952H155.75ZM153.62 4.54952C153.62 2.8542 152.576 1.9326 150.661 1.9326H147.124C146.954 1.9326 146.827 2.06327 146.827 2.23178V6.86726C146.827 7.01857 146.954 7.16644 147.124 7.16644H150.661C152.579 7.16644 153.62 6.26547 153.62 4.54952Z" fill="#212322" />
                        <path d="M168.518 15H166.955C166.83 15 166.721 14.9141 166.681 14.8075L165.351 11.3317C165.31 11.2251 165.202 11.1391 165.077 11.1391H158.444C158.319 11.1391 158.21 11.2251 158.17 11.3317L156.84 14.8075C156.799 14.9141 156.691 15 156.566 15H155.046C154.836 15 154.688 14.7868 154.772 14.5909L160.39 0.192529C160.43 0.0618845 160.539 0 160.664 0H162.945C163.07 0 163.178 0.0653225 163.219 0.192529L168.796 14.5909C168.88 14.7834 168.731 15 168.522 15H168.518ZM164.464 9.011L161.889 2.31721C161.848 2.21064 161.679 2.21064 161.635 2.31721L159.06 9.011C159.019 9.09695 159.08 9.20353 159.185 9.20353H164.339C164.444 9.20353 164.508 9.09695 164.464 9.011Z" fill="#212322" />
                        <path d="M182.889 10.5339C182.589 13.2675 180.031 14.9985 176.915 14.9985C172.619 15.082 169.761 11.7236 169.826 7.48962C169.761 3.2356 172.619 -0.0593405 176.915 0.000810538C180.031 0.000810538 182.589 1.73182 182.889 4.46536C182.91 4.63244 182.782 4.79953 182.589 4.79953H181.044C180.892 4.79953 180.765 4.69594 180.744 4.5489C180.486 2.90143 178.874 1.87886 177.026 1.87886H176.812C173.782 1.87886 171.978 4.31832 171.978 7.48962C171.978 10.6609 173.782 13.1204 176.812 13.1204H177.026C178.874 13.1204 180.486 12.1179 180.744 10.4504C180.765 10.3034 180.896 10.1998 181.044 10.1998H182.589C182.782 10.1998 182.913 10.3668 182.889 10.5339Z" fill="#212322" />
                        <path d="M195.948 0.299243V1.63036C195.948 1.80234 195.807 1.9296 195.668 1.9296H191.206C191.045 1.9296 190.926 2.06031 190.926 2.22885V14.7214C190.926 14.8727 190.807 15 190.646 15H189.199C189.038 15 188.919 14.8727 188.919 14.7214V2.22885C188.919 2.05687 188.8 1.9296 188.639 1.9296H184.177C184.016 1.9296 183.896 1.80234 183.896 1.63036V0.299243C183.896 0.127264 184.016 0 184.177 0H195.678C195.819 0 195.958 0.127264 195.958 0.299243H195.948Z" fill="#212322" />
                        <path d="M215.027 8.32887V14.502C215.027 14.6691 214.894 14.7928 214.713 14.7928H213.408C213.227 14.7928 213.094 14.6691 213.094 14.502V13.3757C213.094 13.2921 213.004 13.2721 212.96 13.3122C212.329 14.0408 210.821 15 208.592 15C204.043 15 200.959 11.8516 200.959 7.48997C200.959 3.12834 203.953 0 208.592 0C212.419 0 214.627 1.9385 214.984 4.67246C215.006 4.83957 214.85 5.00669 214.67 5.00669H213.025C212.866 5.00669 212.755 4.88302 212.733 4.75602C212.394 2.90107 210.976 1.87834 208.704 1.87834H208.48C205.353 1.87834 203.214 3.98396 203.214 7.48997C203.214 10.996 205.353 13.1217 208.48 13.1217H208.704C211.474 13.1217 213.094 11.7647 213.094 9.55548C213.094 9.32487 213.025 9.24131 212.733 9.24131H208.906C208.747 9.24131 208.592 9.11764 208.592 8.95053V7.74064C208.592 7.57353 208.751 7.44987 208.906 7.44987H214.107C214.627 7.44987 215.031 7.84759 215.031 8.32553L215.027 8.32887Z" fill="#212322" />
                        <path d="M245.184 7.50168C245.184 11.6391 241.802 15 237.646 15C233.49 15 230.107 11.6358 230.107 7.50168C230.107 3.36755 233.49 0 237.646 0C241.802 0 245.184 3.36421 245.184 7.50168ZM243.084 7.50168C243.084 4.51573 240.648 2.09217 237.646 2.09217C234.644 2.09217 232.207 4.51573 232.207 7.50168C232.207 10.4876 234.644 12.9112 237.646 12.9112C240.648 12.9112 243.084 10.4876 243.084 7.50168Z" fill="#212322" />
                        <path d="M258.252 0.294983V9.54114C258.252 12.8436 256.337 15 252.714 15C249.09 15 247.195 12.8639 247.195 9.54114V0.294983C247.195 0.125453 247.319 0 247.486 0H248.984C249.15 0 249.274 0.125453 249.274 0.294983V9.33092C249.274 11.7857 250.438 13.1386 252.607 13.1386H252.814C254.979 13.1386 256.167 11.7857 256.167 9.33092V0.294983C256.167 0.125453 256.29 0 256.437 0H257.958C258.105 0 258.248 0.125453 258.248 0.294983H258.252Z" fill="#212322" />
                        <path d="M272.32 4.54952C272.32 7.40371 270.295 9.0784 267.547 9.0784H263.69C263.52 9.0784 263.393 9.22971 263.393 9.37758V14.7008C263.393 14.8728 263.267 15 263.096 15H261.564C261.393 15 261.267 14.8728 261.267 14.7008V0.900964C261.267 0.405778 261.673 0 262.161 0H267.551C270.299 0 272.323 1.69532 272.323 4.54952H272.32ZM270.19 4.54952C270.19 2.8542 269.145 1.9326 267.23 1.9326H263.694C263.523 1.9326 263.397 2.06328 263.397 2.23178V6.86727C263.397 7.01857 263.523 7.16644 263.694 7.16644H267.23C269.148 7.16644 270.19 6.26548 270.19 4.54952Z" fill="#212322" />
                        <path d="M226.066 7.70976C227.254 7.13548 228.097 5.77373 228.097 4.0784C228.097 1.74003 226.159 0 223.431 0H217.935C217.444 0 217.041 0.409214 217.041 0.900961V14.7008C217.041 14.8728 217.167 15 217.338 15H218.871C219.041 15 219.168 14.8728 219.168 14.7008V9.29161C219.168 9.1403 219.294 8.99243 219.465 8.99243H224.059C224.998 9.0784 225.742 9.87964 225.742 10.8459V14.6871C225.742 14.859 225.882 15 226.053 15H227.582C227.753 15 227.893 14.859 227.893 14.6871V11.0591C227.893 9.64924 227.162 8.41472 226.063 7.70633L226.066 7.70976ZM219.171 2.23521C219.171 2.06327 219.297 1.93604 219.468 1.93604H223.11C224.899 1.93604 225.964 2.79573 225.964 4.40509C225.964 5.92847 224.899 7.08734 223.11 7.08734H219.468C219.297 7.08734 219.171 6.93604 219.171 6.78817V2.23865V2.23521Z" fill="#212322" />
                    </svg>

                </div>

                <nav class="header__nav">
                    <ul class="header__list">
                        <li class="header__item">
                            <a class="header__link" href="#" id="whatWeDoLink">What We Do</a>
                            
                        </li>
                        <li class="header__item">
                            <a class="header__link" href="">Impact</a>
                        </li>
                        <li class="header__item">
                            <a class="header__link" href="">About</a>
                        </li>
                        <li class="header__item">
                            <a class="header__link" href="">News</a>
                        </li>
                    </ul>                   
                </nav>
                
                <ul class="header__submenu">
                
                    <nav class="header__nav header__submenu--nav">
                        <ul class="header__list">
                            <li class="header__item">
                                <a class="header__link" href="#">Overview</a>
                                <ul class="header__submenu--list">
                                    <li>
                                        <a href="">
                                            <a class="header__link" href="#" id="whatWeDoLink">What We Do</a>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <a class="header__link" href="#">Impact Institute</a>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <a class="header__link" href="#">Impact Foundation</a>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <a class="header__link" href="#">Impact Advisory</a>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <a class="header__link" href="#">Impact Funds</a>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="header__item">
                                <a style="opacity: 0; cursor: default;" class="header__link">Impact</a>
                            </li>
                            <li class="header__item">
                                <a style="opacity: 0; cursor: default;" class="header__link">About</a>
                            </li>
                            <li class="header__item">
                                <a style="opacity: 0; cursor: default;" class="header__link">News</a>
                            </li>
                        </ul>                   
                    </nav>
                    
                </ul>
                
                <!-- mobile menu -->
                <nav role="navigation" class="burger-menu">
                    <div class="menu-toggle"><span>Menu</span></div>
                    <ul class="menu">
                        <li class="has-children mobile-back">
                            <a class=" ">
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.0761 21.5763L1.9998 11.5L12.0761 1.42373" stroke="#212322" stroke-width="1.5" />
                                    <path d="M2.21644 11.5L21.7189 11.0666" stroke="#212322" stroke-width="1.5" />
                                </svg>
                                Back
                            </a>
                        </li>
                    <li class="has-children">
                        <a href="#"  id="whatWeDoLinkMobile">
                            <span>WHAT WE DO</span>
                            
                        </a>
                        
                    </li>
                    <li>
                        <a href="#">
                        <span>IMPACT</span>
                        <svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-6.22887e-07 1.375L14.25 1.375L14.25 15.625" stroke="#212322" stroke-width="1.5" />
                            <path d="M14.0967 1.5282L0.612793 15.625" stroke="#212322" stroke-width="1.5" />
                        </svg>    
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <span>IMPACT</span>
                        <svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-6.22887e-07 1.375L14.25 1.375L14.25 15.625" stroke="#212322" stroke-width="1.5" />
                            <path d="M14.0967 1.5282L0.612793 15.625" stroke="#212322" stroke-width="1.5" />
                        </svg>    
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <span>IMPACT</span>
                        <svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-6.22887e-07 1.375L14.25 1.375L14.25 15.625" stroke="#212322" stroke-width="1.5" />
                            <path d="M14.0967 1.5282L0.612793 15.625" stroke="#212322" stroke-width="1.5" />
                        </svg>    
                        </a>
                    </li>

                    <ul class="submenu-mobile">
                        <li class="has-children submenu-link">
                            <a href="">
                                Overview
                            </a>
                        </li>
                        <li class="has-children submenu-link">
                            <a href="">
                                Impact Institute
                            </a>
                        </li>
                        <li class="has-children submenu-link">
                            <a href="">
                                Impact Foundation
                            </a>
                        </li>
                    </ul>
                    

                    </ul>
                </nav>

            </div>

            

        </div>

    </header>
<body>