/**
 * CYBER SECURITY EDU - Core Cinematic Logic (FINAL CLEAN FIX)
 */

document.addEventListener('DOMContentLoaded', () => {

    const revealElements = document.querySelectorAll('.reveal, .pro-footer');

    const revealOnScroll = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active', 'active-reveal');
            }
        });
    }, {
        threshold: 0.15,
        rootMargin: "0px 0px -50px 0px"
    });

    revealElements.forEach(el => revealOnScroll.observe(el));

    const cards = document.querySelectorAll('.card');

    cards.forEach((card, index) => {
        card.style.transitionDelay = `${index * 0.1}s`;
    });

    applyLanguage(); // AUTO APPLY LANGUAGE ON LOAD
});


/* SEARCH TOGGLE */
function toggleCinematicSearch() {
    const searchContainer = document.getElementById('searchBox');
    const searchInput = searchContainer.querySelector('.cinematic-input');

    searchContainer.classList.toggle('active');

    if (searchContainer.classList.contains('active')) {
        searchInput.focus();
    } else {
        searchInput.value = '';
    }
}


/* SMOOTH SCROLL */
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const target = document.querySelector(this.getAttribute('href'));

        if (target) {
            window.scrollTo({
                top: target.offsetTop - 80,
                behavior: 'smooth'
            });
        }
    });
});


/* LANGUAGE SYSTEM */
let currentLang = "sw";

const texts = {
    sw: {
        home: "Nyumbani",
        courses: "Masomo",
        contact: "Wasiliana Nasi",
        chatbot: "AI Msaidizi",
        profile: "Wasifu",

        badge: "Jukwaa la Elimu",
        title: "Elimu ya Ulinzi Mtandaoni",
        subtitle: "Elimu kwa Wote",
        desc: "Jifunze mbinu za kisasa za kuzuia udukuzi.",
        trending: "MASHAMBULIZI YANAYOVUMA",

        search: "Tafuta...",
        footerAbout: "Karibu kwenye jukwaa linalotoa elimu ya usalama wa mtandao bila malipo.",
        location: "Zanzibar, Tanzania",
        email: "Barua Pepe",
        phone: "Simu",
        formEmail: "Barua Pepe Yako",
        formMessage: "Andika ujumbe wako...",
        send: "TUMA",
        ssl: "MFUMO SALAMA",

        /* ✅ CARDS SWAHILI */
        cards: [
            {
                icon: "💰",
                title: "MUAMALA UMEKOSEWA",
                desc: "SMS fake zinazoiga M-Pesa au Tigo Pesa.",
                price: "Bure",
                btn: "Soma zaidi →"
            },
            {
                icon: "📞💬",
                title: "UTEKAJI WA WHATSAPP KWA FAKE LINK",
                desc: "Watu kujifanya Admin wa WhatsApp au kampuni.",
                price: "Bure",
                btn: "Soma zaidi →"
            },
            {
                icon: "📱",
                title: "HUDUMA KWA WATEJA FEKI",
                desc: "Matapeli hutumia namba za kawaida kujifanya kampuni.",
                price: "Bure",
                btn: "Soma zaidi →"
            },
            {
                icon: "🔐",
                title: "UTAPELI WA MAFUNDI SIMU",
                desc: "Simu yako inaweza kudukuliwa wakati wa Flash/repair.",
                price: "Bure",
                btn: "Soma zaidi →"
            },
            {
                icon: "🕵️",
                title: "APP ZA PICHA FEKI",
                desc: "Apps za uongo zinazodai kuona au kubadilisha picha.",
                price: "Bure",
                btn: "Soma zaidi →"
            }
        ]
    },

    en: {
        home: "Home",
        courses: "Courses",
        contact: "Contact",
        chatbot: "AI Chatbot",
        profile: "Profile",

        badge: "Learning Platform",
        title: "Cyber Security Education",
        subtitle: "Education for all",
        desc: "Learn modern cyber security methods.",
        trending: "TRENDING ATTACKS",

        search: "Search...",
        footerAbout: "Welcome to free cybersecurity education platform.",
        location: "Zanzibar, Tanzania",
        email: "Email",
        phone: "Phone",
        formEmail: "Your Email",
        formMessage: "Type your message...",
        send: "SEND",
        ssl: "SSL PROTECTED",

        /* ✅ CARDS ENGLISH */
        cards: [
            {
                icon: "💰",
                title: "WRONG TRANSACTION SCAM",
                desc: "Fake SMS pretending to be M-Pesa or Tigo Pesa.",
                price: "Free",
                btn: "Read more →"
            },
            {
                icon: "📞💬",
                title: "WHATSAPP FAKE LINK SCAM",
                desc: "People pretending to be WhatsApp admins.",
                price: "Free",
                btn: "Read more →"
            },
            {
                icon: "📱",
                title: "FAKE CUSTOMER SERVICE",
                desc: "Fraudsters act like official support teams.",
                price: "Free",
                btn: "Read more →"
            },
            {
                icon: "🔐",
                title: "PHONE REPAIR SCAM",
                desc: "Phones can be hacked during flashing/repair.",
                price: "Free",
                btn: "Read more →"
            },
            {
                icon: "🕵️",
                title: "FAKE PHOTO APPS",
                desc: "Fake apps claiming to edit or reveal images.",
                price: "Free",
                btn: "Read more →"
            }
        ]
    }
};


/* SWITCH LANGUAGE */
function toggleLanguage() {
    currentLang = currentLang === "sw" ? "en" : "sw";
    applyLanguage();
}




/* APPLY LANGUAGE */
function applyLanguage() {
    const t = texts[currentLang];

    /* NAV */
    const nav = document.querySelectorAll(".nav-links a");
    if (nav[0]) nav[0].textContent = t.home;
    if (nav[1]) nav[1].textContent = t.courses;
    if (nav[2]) nav[2].textContent = t.contact;
    if (nav[3]) nav[3].textContent = t.profile;
    if (nav[4]) nav[4].textContent = t.chatbot;

    /* HERO */
    const badge = document.querySelector(".badge");
    if (badge) badge.textContent = t.badge;

    const h1 = document.querySelector("h1");
    if (h1) h1.innerHTML = `${t.title} <br><span class="gradient-text">${t.subtitle}</span>`;

    const p = document.querySelector(".hero p");
    if (p) p.textContent = t.desc;

    const tred = document.querySelector(".tred");
    if (tred) tred.textContent = t.trending;

    /* HERO STATS */
    const stats = document.querySelectorAll(".hero-stats span");
    if (stats[0]) stats[0].textContent = currentLang === "sw" ? "⚡ Masomo 20+" : "⚡ 20+ Courses";
    if (stats[1]) stats[1].textContent = currentLang === "sw" ? "💻 AI Msaidizi" : "💻 AI Chatbot";
    if (stats[2]) stats[2].textContent = currentLang === "sw" ? "🔒 Jaribio" : "🔒 Test";

    /* SEARCH */
    const searchInput = document.querySelector(".cinematic-input");
    if (searchInput) searchInput.placeholder = t.search;

    /* FOOTER */
    const titles = document.querySelectorAll(".section-title");


if (titles.length >= 3) {

    titles[0].querySelectorAll("*").forEach(el => el.remove?.());

    titles[0].innerHTML = currentLang === "sw"
        ? '<i class="fa-solid fa-user-shield"></i> KUHUSU SISI'
        : '<i class="fa-solid fa-user-shield"></i> ABOUT US';

    titles[1].innerHTML = currentLang === "sw"
        ? '<i class="fa-solid fa-map-location-dot"></i> ENEO'
        : '<i class="fa-solid fa-map-location-dot"></i> LOCATION';

    titles[2].innerHTML = currentLang === "sw"
        ? '<i class="fa-solid fa-terminal"></i> UZOEFU WA MTUMIAJI'
        : '<i class="fa-solid fa-terminal"></i> USER EXPERIENCE';
        const emailInput = document.querySelector(".pro-form input[type='email']");
if (emailInput) {
    emailInput.placeholder = currentLang === "sw"
        ? "Barua Pepe Yako ya Usalama"
        : "Your Security Email";
}

const messageInput = document.querySelector(".pro-form textarea");
if (messageInput) {
    messageInput.placeholder = currentLang === "sw"
        ? "Andika ujumbe wako uliosimbwa..."
        : "Type your encrypted message here...";
}

const sendBtn = document.querySelector(".pro-btn");
if (sendBtn) {
    sendBtn.innerHTML = currentLang === "sw"
        ? `TUMA <i class="fa-solid fa-paper-plane"></i>`
        : `SEND <i class="fa-solid fa-paper-plane"></i>`;
        const about = document.querySelector(".about-text");

if (about) {
    about.innerHTML = currentLang === "sw"
        ? 'Karibu kwenye <span class="highlight">Cyber Security Edu</span>. "Karibu kwenye jukwaa linalotoa elimu ya usalama wa mtandao bure. Lengo letu ni kumsaidia kila mtu kupata uelewa na uzoefu wa kutosha ili kujikinga na uovu pamoja na mbinu zote za wadukuzi mtandaoni."'
        : 'Welcome to <span class="highlight">Cyber Security Edu</span>. "Welcome to a platform that provides free cybersecurity education. Our goal is to help everyone gain enough understanding and experience to protect themselves against cyber threats and all hacker techniques online."';
}
}
}

    /* 🔥 CARDS TRANSLATION (HAPA NDIO KEY PART) */
    const cards = document.querySelectorAll(".card");
    t.cards.forEach((c, i) => {
        if (!cards[i]) return;

        const icon = cards[i].querySelector(".icon");
        const title = cards[i].querySelector("h3");
        const desc = cards[i].querySelector("p");
        const price = cards[i].querySelector(".price");
        const btn = cards[i].querySelector(".btn-link");

        if (icon) icon.textContent = c.icon;
        if (title) title.textContent = c.title;
        if (desc) desc.textContent = c.desc;
        if (price) price.textContent = c.price;
        if (btn) btn.textContent = c.btn;
    });

    const langBtn = document.getElementById("langBtn");
    if (langBtn) langBtn.textContent = currentLang.toUpperCase();
}
const pBtn = document.getElementById("profileBtn");
const pModal = document.getElementById("w3DropModal");
const cBtn = document.getElementById("closeModal");

// Toggle with cinematic animation
pBtn.addEventListener("click", (e) => {
    e.stopPropagation();
    if (pModal.style.display === "block") {
        closeProModal();
    } else {
        pModal.style.display = "block";
    }
});

cBtn.addEventListener("click", closeProModal);

function closeProModal() {
    pModal.style.animation = "proPopOut 0.3s ease forwards";
    setTimeout(() => {
        pModal.style.display = "none";
        pModal.style.animation = ""; // Reset animation
    }, 300);
}

// Keyframes for closing
const style = document.createElement('style');
style.innerHTML = `
    @keyframes proPopOut {
        0% { opacity: 1; transform: scale(1); }
        100% { opacity: 0; transform: scale(0.8) translateY(-20px); }
    }
`;
document.head.appendChild(style);

function toggleView(viewId) {
    const sections = ['signInBox', 'signUpBox'];
    sections.forEach(id => {
        const el = document.getElementById(id);
        if(el) el.style.display = 'none';
    });
    
    const target = document.getElementById(viewId);
    if(target) {
        target.style.display = 'block';
        target.style.animation = 'fadeInUp 0.5s ease';
    }
}
function toggleView(id){
    document.querySelectorAll(".modal-inner-content").forEach(el=>{
        el.style.display="none";
    });
    document.getElementById(id).style.display="block";
}

/* PASSWORD SHOW/HIDE */
document.getElementById("togglePass").addEventListener("click", function(){
    const pass = document.getElementById("password");

    if(pass.type === "password"){
        pass.type = "text";
        this.classList.remove("fa-eye-slash");
        this.classList.add("fa-eye");
    }else{
        pass.type = "password";
        this.classList.add("fa-eye-slash");
        this.classList.remove("fa-eye");
    }
});
