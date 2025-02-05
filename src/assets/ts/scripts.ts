export const baseUrl_Path = "";
export const baseUrl: string = window.location.port && window.location.port !== "80" && window.location.port !== "443"
    ? `${window.location.protocol}//${window.location.hostname}:${window.location.port}${baseUrl_Path}`
    : `${window.location.protocol}//${window.location.hostname}${baseUrl_Path}`;

export const currentUrl: string = baseUrl_Path
    ? (baseUrl + window.location.pathname).replace(baseUrl_Path, "")
    : (baseUrl + window.location.pathname);

document.addEventListener('DOMContentLoaded', function () {
    interface MenuItem {
        id?: string;
        type?: 'category';
        text: string;
        href?: string;
        icon: string;
        target?: '_blank';
        dropdown?: MenuItem[];
    }

    const menuItems: MenuItem[] = [
        {id: 'homehome', text: 'Anasayfa', href: `${baseUrl}/`, icon: 'fas fa-home'},
        {type: 'category', text: 'DarkRP', icon: 'fa-solid fa-gun'},
        {id: 'darkrpnedir', text: 'DarkRP Nedir?', href: `${baseUrl}/darkrp`, icon: 'fa-solid fa-gun'},
        {
            id: 'darkrpkurallar',
            text: 'Oyun Kuralları',
            href: 'https://moonrp.com/oyunkurallari',
            icon: 'fas fa-book',
            target: '_blank'
        },
        {
            id: 'darkrpwelcome',
            text: 'DarkRP Başlarken',
            href: `${baseUrl}/darkrp-baslarken`,
            icon: 'fa-regular fa-hand',
            dropdown: [
                {
                    id: 'darkrpchromium',
                    text: 'Chromium Nedir? Nasıl Chromium Geçerim?',
                    href: `${baseUrl}/darkrp-baslarken/chromium`,
                    icon: 'fa-brands fa-chrome'
                },
                {
                    id: 'darkrpiletisim',
                    text: 'Sohbet ve İletişim',
                    href: `${baseUrl}/darkrp-baslarken#chat`,
                    icon: 'fas fa-comments'
                },
                {
                    id: 'darkrpphonee',
                    text: 'Telefon Kullanımı',
                    href: `${baseUrl}/darkrp-baslarken#phone`,
                    icon: 'fas fa-phone'
                },
                {
                    id: 'darkrpfamily',
                    text: 'Aile Paylaşımı ile sunucuya nasıl katılırım?',
                    href: `${baseUrl}/darkrp-baslarken/sss#ailepaylasimi`,
                    icon: 'fas fa-users'
                },
                {
                    id: 'darkrpgeforce',
                    text: 'GeForce Now ile sunucuya nasıl katılırım?',
                    href: `${baseUrl}/darkrp-baslarken/sss#geforcenow`,
                    icon: 'fas fa-cloud'
                },
                {
                    id: 'darkrplinux',
                    text: 'Linux distrosu kullanıyorum nasıl sunucuya katılabilirim?',
                    href: `${baseUrl}/darkrp-baslarken/linux`,
                    icon: 'fa-brands fa-linux'
                },
                {
                    id: 'darkrpsss',
                    text: 'Sıkça Sorulan Sorular',
                    href: `${baseUrl}/darkrp-baslarken/sss`,
                    icon: 'fas fa-question'
                }
            ]
        },
        {
            id: 'darkrpjob',
            text: 'DarkRP Kariyer',
            href: `${baseUrl}/darkrp-kariyer`,
            icon: 'fa-solid fa-user-graduate',
            dropdown: [
                {
                    id: 'darkrplegal',
                    text: 'Devlet Çalışanı',
                    href: `${baseUrl}/darkrp-kariyer/legal`,
                    icon: 'fa-solid fa-walkie-talkie'
                },
                {
                    id: 'darkrpesnaf',
                    text: 'Esnaf ve Siviller',
                    href: `${baseUrl}/darkrp-kariyer/esnaf`,
                    icon: 'fa-solid fa-scale-balanced'
                },
                {
                    id: 'darkrpillegal',
                    text: 'Yasadışı Organizasyonlar',
                    href: `${baseUrl}/darkrp-kariyer/illegal`,
                    icon: 'fa-solid fa-user-tie'
                },
            ]
        },

        {
            id: 'darkrpsss1',
            text: 'Sıkça Sorulan Sorular',
            href: `${baseUrl}/darkrp-baslarken/sss`,
            icon: 'fas fa-question'
        },
        {
            id: 'darkrpvideorehber',
            text: 'Video Rehber',
            href: `#`,
            target: '_blank',
            icon: 'fa-solid fa-video',
            dropdown: [
                {
                    id: 'darkrpvideo_balik',
                    text: 'Balık Nasıl Tutulur?',
                    href: `https://www.youtube.com/shorts/Pquczsp28PU`,
                    icon: 'fa-solid fa-fish',
                    target: '_blank'
                },
                {
                    id: 'darkrpvideo_maden',
                    text: 'Madencilik Nasıl Yapılır?',
                    href: `https://www.youtube.com/shorts/j_5w_VZC8Tk`,
                    icon: 'fa-solid fa-person-arrow-down-to-line'
                },
                {
                    id: 'darkrpvideo_cars',
                    text: 'Araç Hurdalığına Araç Götürme?',
                    href: `https://www.youtube.com/shorts/vrctpNdDa8A`,
                    icon: 'fa-solid fa-car',
                    target: '_blank'
                },
                {
                    id: 'darkrpvideo_toolgun',
                    text: 'Tool Gun Nasıl Kullanılır?',
                    href: `https://www.youtube.com/watch?v=f3CUn74XE5A`,
                    icon: 'fa-solid fa-person-circle-question',
                    target: '_blank'
                },
                {
                    id: 'darkrpvideo_build',
                    text: 'Build Nasıl Yapılır?',
                    href: `https://www.youtube.com/watch?v=bx_BeAMHv-Y`,
                    icon: 'fa-solid fa-helmet-safety',
                    target: '_blank'
                },
            ]
        },

        {type: 'category', text: 'FiveM', icon: 'fa-solid fa-car-side'},
        {id: 'fivemnedir', text: 'FiveM Nedir?', href: `${baseUrl}/fivem`, icon: 'fa-solid fa-car-side'},
        {
            id: 'fivemkurallar',
            text: 'Oyun Kuralları',
            href: `https://discord.com/channels/308530419748306944/1331288794892075018`,
            icon: 'fa-solid fa-book-atlas',
            target: '_blank'
        },
        {
            id: 'fivemwelcome',
            text: 'FiveM Başlarken',
            href: `${baseUrl}/fivem-baslarken`,
            icon: 'fa-solid fa-mitten',
            dropdown: [
                {
                    id: 'fivemjob',
                    text: 'Meslekler',
                    href: `${baseUrl}/fivem-baslarken#meslek`,
                    icon: 'fa-solid fa-people-group',
                },
                {
                    id: 'fivemmoney',
                    text: 'Oyunda Nasıl Para Kazanabilirim?',
                    href: `${baseUrl}/fivem-baslarken#money`,
                    icon: 'fa-solid fa-sack-dollar',
                },
                {
                    id: 'fivemfish',
                    text: 'Balık Nasıl Tutulur ?',
                    href: `${baseUrl}/fivem-baslarken#balik`,
                    icon: 'fa-solid fa-fish',
                },
                {
                    id: 'fivemsss',
                    text: 'Sıkça Sorulan Sorular',
                    href: `${baseUrl}/fivem-baslarken/sss`,
                    icon: 'fas fa-question'
                }
            ]
        },

        {
            id: 'fivemsss1',
            text: 'Sıkça Sorulan Sorular',
            href: `${baseUrl}/fivem-baslarken/sss`,
            icon: 'fas fa-question'
        },
        {type: 'category', text: 'Trouble in Terrorist Town', icon: 'fa-solid fa-user-secret'},
        {id: 'tttnedir', text: 'TTT Nedir?', href: `${baseUrl}/ttt`, icon: 'fa-solid fa-user-secret'},
        {
            id: 'tttkurallar',
            text: 'Oyun Kuralları',
            href: `https://moonrp.com/tttkurallar`,
            icon: 'fa-solid fa-book-skull',
            target: '_blank'
        },

        {
            id: 'tttwelcome',
            text: 'TTT Başlarken',
            href: `${baseUrl}/ttt-baslarken`,
            icon: 'fa-solid fa-graduation-cap',
            dropdown: [
                {
                    id: 'tttchromium',
                    text: 'Chromium Nedir? Nasıl Chromium Geçerim?',
                    href: `${baseUrl}/ttt-baslarken/chromium`,
                    icon: 'fa-brands fa-chrome'
                },
                {
                    id: 'tttlinux',
                    text: 'Linux distrosu kullanıyorum nasıl sunucuya katılabilirim?',
                    href: `${baseUrl}/ttt-baslarken/linux`,
                    icon: 'fa-brands fa-linux'
                },
                {
                    id: 'tttsss',
                    text: 'Sıkça Sorulan Sorular',
                    href: `${baseUrl}/ttt-baslarken/sss`,
                    icon: 'fas fa-question'
                }
            ]
        },
        {
            id: 'tttsss1',
            text: 'Sıkça Sorulan Sorular',
            href: `${baseUrl}/ttt-baslarken/sss`,
            icon: 'fas fa-question'
        },
        {type: 'category', text: 'Konu Dışı', icon: 'fa-solid fa-person-circle-question'},
        {
            id: 'steamidfind',
            text: 'Steam ID nasıl öğrenebilirim?',
            href: `${baseUrl}/steamid`,
            icon: 'fa-brands fa-steam'
        },
        {
            id: 'discordid',
            text: 'Discord ID nasıl öğrenebilirim?',
            href: `${baseUrl}/discordid`,
            icon: 'fa-brands fa-discord'
        },
        {
            id: 'screenrecording',
            text: 'Ekran Kaydı nasıl alabilirim?',
            href: `${baseUrl}/ekrankaydi`,
            icon: 'fa-solid fa-video'
        },
        {
            id: 'gmodcontent',
            text: 'CS:S Content Nasıl İndiririm?',
            href: `${baseUrl}/css`,
            icon: 'fa-solid fa-cubes'
        },

        {type: 'category', text: 'Faydalı Bağlantılar', icon: 'fa-solid fa-arrow-up-right-from-square'},
        {
            id: 'mg',
            text: 'MoonGaming',
            href: 'https://moonrp.com',
            icon: 'fa-solid fa-moon',
            target: '_blank'
        },
        {
            id: 'mgdiscord',
            text: 'MoonGaming - Discord',
            href: 'https://discord.gg/moongaming',
            icon: 'fa-brands fa-discord',
            target: '_blank'
        },
        {
            id: 'mgmarket',
            text: 'MoonGaming - Market',
            href: 'https://moonrp.com/market',
            icon: 'fa-solid fa-shop',
            target: '_blank'
        },
        {
            id: 'mgshopier',
            text: 'MoonGaming - Shopier',
            href: 'https://www.shopier.com/MoonGamingTR',
            icon: 'fa-solid fa-cart-shopping',
            target: '_blank'
        },
        {
            id: 'steamidfinder',
            text: 'Steam ID Bulucu',
            href: 'https://steamdb.info/calculator/',
            icon: 'fa-regular fa-id-card',
            target: '_blank'
        },

    ];

    const leftMenu = document.getElementById('leftMenu') as HTMLUListElement;
    const topMenu = document.getElementById('topMenu') as HTMLUListElement;


    menuItems.forEach(item => {
        const mobileID = `${item.id}-mobile`;
        if (item.type === 'category') {
            const categoryItem = document.createElement('li');
            categoryItem.classList.add('category-item', 'nav-link');
            categoryItem.innerHTML = `<span><i class="${item.icon}"></i> ${item.text}</span>`;
            leftMenu.appendChild(categoryItem);
            topMenu.appendChild(categoryItem.cloneNode(true));
        } else {
            const menuItem = document.createElement('li');
            menuItem.classList.add('nav-item');
            const menuItemContainer = document.createElement('div');
            menuItemContainer.classList.add('nav-link-container', 'd-flex', 'justify-content-between', 'align-items-center');

            const linkElement = document.createElement('a');
            linkElement.classList.add('nav-link');
            linkElement.setAttribute('id', item.id || '');
            linkElement.setAttribute('href', item.href || '#');
            linkElement.innerHTML = `<i class="${item.icon}"></i> ${item.text}`;
            if (item.target) {
                linkElement.setAttribute('target', item.target);
            }
            menuItemContainer.appendChild(linkElement);

            if (item.dropdown) {
                const wrapperDiv = document.createElement('div');
                wrapperDiv.classList.add('dropdown-wrapper');
                wrapperDiv.appendChild(menuItemContainer);
                menuItem.appendChild(wrapperDiv);
                leftMenu.appendChild(menuItem);

                const dropdownDiv = document.createElement('div');
                dropdownDiv.classList.add('item-container');
                dropdownDiv.setAttribute('id', `${item.id}-dropdown`);

                item.dropdown.forEach(sub => {
                    const dropdownItem = document.createElement('div');
                    dropdownItem.classList.add('dropdown-item-container');
                    dropdownItem.setAttribute("id", `${sub.id}-d`);
                    dropdownItem.innerHTML = `
                        <a class="nav-link" id="${sub.id}" href="${sub.href}">
                            <i class="${sub.icon}"></i> ${sub.text}
                        </a>`;
                    dropdownDiv.appendChild(dropdownItem);
                });

                const dropdownBtn = document.createElement('button');
                dropdownBtn.classList.add('dropdown-toggle-btn', 'btn');
                dropdownBtn.setAttribute('aria-expanded', 'false');
                dropdownBtn.innerHTML = `<i class="fas fa-chevron-right"></i>`;

                menuItemContainer.appendChild(dropdownBtn);
                wrapperDiv.appendChild(dropdownDiv);

                dropdownBtn.addEventListener('click', function () {
                    const isVisible = dropdownDiv.classList.toggle('show');
                    dropdownBtn.setAttribute('aria-expanded', isVisible.toString());
                    const icon = dropdownBtn.querySelector('i');
                    if (icon) {
                        icon.classList.toggle('fa-chevron-right', !isVisible);
                        icon.classList.toggle('fa-chevron-down', isVisible);
                    }
                });

                const clonedMenuItem = menuItem.cloneNode(true) as HTMLLIElement;
                const mobileDropdownDiv = clonedMenuItem.querySelector('.item-container') as HTMLDivElement;
                mobileDropdownDiv.setAttribute('id', `${item.id}-mobile-dropdown`);
                topMenu.appendChild(clonedMenuItem);

                const mobileDropdownBtn = clonedMenuItem.querySelector('.dropdown-toggle-btn') as HTMLButtonElement;
                mobileDropdownBtn.addEventListener('click', function () {
                    const isVisible = mobileDropdownDiv.classList.toggle('show');
                    mobileDropdownBtn.setAttribute('aria-expanded', isVisible.toString());
                    const icon = mobileDropdownBtn.querySelector('i');
                    if (icon) {
                        icon.classList.toggle('fa-chevron-right', !isVisible);
                        icon.classList.toggle('fa-chevron-down', isVisible);
                    }
                });
            } else {
                menuItem.appendChild(menuItemContainer);
                leftMenu.appendChild(menuItem);

                const clonedMenuItem = menuItem.cloneNode(true) as HTMLLIElement;
                const clonedMenuItemContainer = clonedMenuItem.querySelector('.nav-link-container') as HTMLDivElement;
                clonedMenuItemContainer.classList.remove('align-items-center');
                clonedMenuItem.querySelector('a')!.setAttribute('id', mobileID);
                topMenu.appendChild(clonedMenuItem);
            }
        }
    });

    const contentHeaders = document.querySelectorAll<HTMLHeadingElement>('.content h1, .content h2, .content h3, .content h4, .content h5:not(.modal h1):not(.modal h2):not(.modal h3):not(.modal h4):not(.modal h5)');
    const toggleOffcanvasBtn = document.getElementById('toggleOffcanvas') as HTMLElement;
    const offcanvasElement = document.getElementById('offcanvasRight') as HTMLElement;
    const offcanvasRightMenu = document.getElementById('offcanvasMenu') as HTMLElement;
    const rightMenu = document.getElementById('rightMenu') as HTMLElement;

    let lastLevel = 1;
    let currentParent: HTMLElement = rightMenu;

    contentHeaders.forEach(header => {
        const id = header.id;
        const text = header.textContent || "";

        if (id.length !== 0) {
            const headerLevel = parseInt(header.tagName.charAt(1), 10);
            const rightMenuItem = document.createElement('li');
            rightMenuItem.classList.add('nav-item');
            rightMenuItem.innerHTML = `<a class="nav-link" style="padding-left: ${headerLevel * 10}px;" href="#${id}">${text}</a>`;
            currentParent.appendChild(rightMenuItem);
            lastLevel = headerLevel;

            const offcanvasMenuItem = document.createElement('li');
            offcanvasMenuItem.classList.add('nav-item');
            offcanvasMenuItem.innerHTML = `<a class="nav-link" style="padding-left: ${headerLevel * 10}px;" href="#${id}">${text}</a>`;
            offcanvasRightMenu.appendChild(offcanvasMenuItem);
        }
    });

    if (offcanvasRightMenu.children.length === 0) {
        toggleOffcanvasBtn.classList.add("nullcontent");
    }

    toggleOffcanvasBtn.addEventListener('click', () => {
        // @ts-ignore
        const offcanvas = new bootstrap.Offcanvas(offcanvasElement);
        offcanvas.show();
    });

    function updateActiveClass() {
        const links = document.querySelectorAll<HTMLAnchorElement>('#mobileBookmarks .nav-link, #rightMenu .nav-link');
        const allMenuLinks = document.querySelectorAll<HTMLAnchorElement>('#topMenu .nav-link, #leftMenu .nav-link');

        links.forEach(link => link.classList.remove('active'));
        allMenuLinks.forEach(link => link.classList.remove('active'));

        links.forEach(link => {
            const targetId = link.getAttribute('href')?.substring(1) || "";
            const targetElement = document.getElementById(targetId);

            if (targetElement && window.location.hash === `#${targetId}`) {
                link.classList.add('active');
            }
        });

        allMenuLinks.forEach(link => {
            const currentUrl = window.location.href;
            const currentUrl1 = currentUrl.slice(0, -1);

            if (link.getAttribute('href') === currentUrl || link.getAttribute('href') === currentUrl1) {
                link.classList.add('active');
                const parentItem = link.closest('.dropdown-wrapper') as HTMLElement;
                if (parentItem) {
                    const dropdownDiv = parentItem.querySelector('.item-container') as HTMLElement;
                    if (dropdownDiv) {
                        dropdownDiv.classList.add('show');
                        const dropdownBtn = parentItem.querySelector('.dropdown-toggle-btn') as HTMLElement;
                        if (dropdownBtn) {
                            const icon = dropdownBtn.querySelector('i');
                            if (icon) {
                                icon.classList.remove('fa-chevron-right');
                                icon.classList.add('fa-chevron-down');
                            }
                        }
                    }
                }
            }
        });
        MarkSelector();
    }

    function MarkSelector() {
        const currentHash = window.location.hash;
        contentHeaders.forEach(header => {
            const existingSpan = header.querySelector('span.highlighted');
            if (existingSpan) {
                header.innerHTML = existingSpan.innerHTML;
                existingSpan.remove();
            }
        });

        if (currentHash) {
            const targetHeader = document.querySelector(`.content ${currentHash}`) as HTMLElement;
            if (targetHeader) {
                const headerContent = targetHeader.innerHTML;
                const span = document.createElement('span');
                span.classList.add('highlighted');
                span.innerHTML = headerContent;
                targetHeader.innerHTML = '';
                targetHeader.appendChild(span);
            }
        }
    }

    window.addEventListener('hashchange', updateActiveClass);
    updateActiveClass();

    const toggler = document.getElementsByClassName("caret");
    for (let i = 0; i < toggler.length; i++) {
        toggler[i].addEventListener("click", function () {
            const parentElement = (this.parentElement as HTMLElement);
            const nested = parentElement.querySelector(".nested") as HTMLElement;
            nested.classList.toggle("active");

            const icon = this.querySelector("i");
            if (icon) {
                icon.classList.toggle("fa-chevron-right");
                icon.classList.toggle("fa-chevron-down");
            }
        });
    }

    const videoContainers = document.querySelectorAll('.video-container');
    videoContainers.forEach(container => {
        const video = container.querySelector('.player') as HTMLVideoElement;
        const youtubePlayer = container.querySelector('.yt-player') as HTMLElement;
        video.onerror = () => {
            video.style.display = 'none';
            youtubePlayer.style.display = 'block';
        };
    });

    const modalElement = document.getElementById("imageModal") as HTMLElement;
    const modalImage = document.getElementById("modalImage") as HTMLImageElement;
    const modalImageMobile = document.getElementById("modalImageMobile") as HTMLImageElement;
    const modalTitle = document.getElementById("imageModalLabel") as HTMLElement;

    const bootstrapModal = new (window as any).bootstrap.Modal(modalElement, {
        backdrop: true
    });

    const zoomImages = document.querySelectorAll<HTMLImageElement>(".img-zoom");

    zoomImages.forEach(image => {
        image.addEventListener("click", () => {
            modalImage.src = image.src;
            modalTitle.innerText = `Büyütülmüş Resim`;
            modalImageMobile.src = image.src;
            bootstrapModal.show();
        });
    });

    let scale = 1;
    let currentTranslateX = 0;
    let currentTranslateY = 0;
    let isDragging = false;
    let startX: number, startY: number;

    modalImage.addEventListener("wheel", (event) => {
        event.preventDefault();

        const zoomAmount = event.deltaY < 0 ? 1.1 : 0.9;
        scale = Math.max(1, Math.min(scale * zoomAmount, 3));

        modalImage.style.transform = `scale(${scale}) translate(${currentTranslateX}px, ${currentTranslateY}px)`;
    });

    modalImage.addEventListener("mousedown", (event) => {
        isDragging = true;
        startX = event.clientX - currentTranslateX;
        startY = event.clientY - currentTranslateY;
        modalImage.style.cursor = "grabbing";
    });

    document.addEventListener("mousemove", (event) => {
        if (!isDragging) return;
        currentTranslateX = event.clientX - startX;
        currentTranslateY = event.clientY - startY;
        modalImage.style.transform = `scale(${scale}) translate(${currentTranslateX}px, ${currentTranslateY}px)`;
    });

    document.addEventListener("mouseup", () => {
        isDragging = false;
        modalImage.style.cursor = "grab";
    })
});
