import solutions from './solutions.fr.json'

export default {
    nav: {
        home: 'Accueil',
        services: 'Services',
        solutions: 'Solutions',
        portfolio: 'Réalisations',
        about: 'À propos',
        blog: 'Blog',
        contact: 'Contact'
    },

    seo: {
        home: { title: 'verbeek.ug | Solutions logicielles sur mesure pour les entreprises', description: 'Logiciels sur mesure pour les entreprises africaines : automatisation, solutions d\'IA, plateformes communautaires et conseil. Créés par verbeek.ug software solutions.' },
        services: { title: 'Services | verbeek.ug software solutions', description: 'Automatisation des processus, solutions d\'IA, plateformes communautaires participatives et conseil logiciel indépendant, adaptés à votre entreprise.' },
        services_ai: { title: "Scan et mise en œuvre de l'IA | verbeek.ug software solutions", description: "Trouvez où l'IA est rentable dans votre entreprise : scan au périmètre défini, pilote, puis mise en œuvre et exploitation. Notre méthode." },
        // AI scan and implementation page
    aiServices: {
        hero_subtitle: "Scan et mise en œuvre de l'IA",
        hero_title: "Une IA qui mérite sa place dans votre entreprise",
        hero_description: "Nous commençons par trouver où l'IA vous fera vraiment gagner du temps ou de l'argent, nous la validons sur un processus, puis seulement ensuite nous l'intégrons à votre façon de travailler.",
        back: "Tous les services",
        steps_label: "Notre méthode",
        steps_title: "Du scan au système en production en quatre étapes",
        duration: "Durée",
        deliverable: "Vous obtenez",
        steps: [
            { name: "Scan", duration: "Environ une semaine", text: "Nous parlons aux personnes qui font le travail, cartographions vos processus et examinons les outils et les données dont vous disposez déjà.", deliverable: "Une liste priorisée de cas d'usage avec le temps gagné attendu, les risques et une décision claire : on y va ou non." },
            { name: "Pilote", duration: "Deux à quatre semaines", text: "Nous construisons le cas d'usage le plus prometteur, petit mais réel, et le mesurons par rapport à la situation de départ établie lors du scan.", deliverable: "Un pilote fonctionnel, des résultats mesurés et une décision sur son déploiement." },
            { name: "Mise en œuvre", duration: "Selon le périmètre", text: "Nous le connectons à vos systèmes, ajoutons des contrôles et des solutions de repli, et formons les personnes qui l'utiliseront.", deliverable: "Un système en production, de la documentation et une équipe formée." },
            { name: "Exploitation", duration: "Continue, facultative", text: "Nous suivons la qualité, le coût et l'usage, et passons les résultats en revue avec vous chaque mois. Vous pouvez reprendre la main à tout moment.", deliverable: "Un bilan mensuel et une courte liste d'améliorations." }
        ],
        principles_label: "Principes",
        principles_title: "Comment nous gardons l'IA honnête",
        principles: [
            { title: "Le problème d'abord", text: "Nous partons d'une tâche qui vous coûte du temps ou de l'argent, pas d'un modèle ni d'une mode." },
            { title: "Un humain reste dans la boucle", text: "L'IA rédige et suggère ; les personnes valident tout ce qui compte." },
            { title: "Vérifié par rapport à vos faits", text: "Les résultats sont vérifiés par rapport à vos propres données, comme Job Scout vérifie chaque affirmation d'un CV." },
            { title: "Vos données restent les vôtres", text: "Nous n'entraînons pas de modèle sur vos données, vous êtes propriétaire de ce que nous construisons, et tout est documenté pour que vous puissiez partir." }
        ],
        fit_title: "Le scan est aussi un bon endroit pour s'arrêter",
        fit_text: "Si l'IA ne vaut pas encore la peine pour vous, le scan vous le dit, et vous gardez le rapport dans tous les cas. Aucune obligation de construire avec nous.",
        cta_title: "Commencez par un scan",
        cta_text: "Parlez-nous de votre entreprise et nous définirons ensemble le périmètre d'un scan. La première consultation est toujours gratuite.",
        cta_button: "Réserver une consultation gratuite"
    },

    portfolio: { title: 'Réalisations | verbeek.ug software solutions', description: 'Les plateformes que nous avons créées et que nous exploitons : Prompt a Tool, Crowded Airport, Job Scout et Lore, ainsi que MyCanopy, des annonces immobilières pour l\'Ouganda, en cours de développement.' },
        about: { title: 'À propos | verbeek.ug software solutions', description: 'Qui nous sommes, comment nous travaillons et dans quoi nous sommes spécialisés : des solutions logicielles intelligentes qui résolvent de vrais problèmes pour les entreprises africaines.' },
        contact: { title: 'Contact | verbeek.ug software solutions', description: 'Contactez-nous pour une première consultation gratuite sur votre projet logiciel.' },
        blog: { title: 'Blog | verbeek.ug software solutions', description: 'Articles et actualités de verbeek.ug software solutions.' }
    },

    solutions,

    common: {
        learn_more: 'En savoir plus',
        view_more: 'Voir plus',
        get_started: 'Commencer',
        free_consultation: 'Consultation gratuite',
        view_services: 'Voir les services',
        view_portfolio: 'Voir les réalisations',
        send_message: 'Envoyer le message',
        back_to_portfolio: 'Retour aux réalisations',
        book_a_call: 'Réserver un appel',
        close: 'Fermer',
        visit_site: 'Visiter le site',
        toggle_menu: 'Afficher ou masquer le menu'
    },

    hero: {
        subtitle: 'Solutions logicielles intelligentes',
        title: 'Des logiciels intelligents pour des entreprises intelligentes',
        description: 'Nous créons des applications web innovantes et sur mesure qui aident les entreprises à se développer. Nous transformons vos défis en solutions numériques intelligentes.'
    },

    stats: {
        years: 'Années d\'expérience',
        platforms: 'Plateformes en ligne',
        jobs: 'Offres d\'emploi analysées par Job Scout'
    },

    process: {
        label: 'Comment nous travaillons',
        title: 'Du premier appel au lancement, et au-delà',
        subtitle: 'Un processus simple et transparent, pour que vous sachiez toujours ce qui se passe ensuite.',
        steps: [
            { title: 'Découvrir', text: 'Nous écoutons, posons les bonnes questions et définissons ensemble ce que réussir veut dire.' },
            { title: 'Concevoir', text: 'Un plan clair et un prototype simple, pour que vous voyiez l\'idée avant que nous la construisions.' },
            { title: 'Construire', text: 'Nous construisons par petites étapes et partageons souvent l\'avancement, sans mauvaise surprise.' },
            { title: 'Accompagner', text: 'Nous lançons, corrigeons et améliorons, avec 3 mois de corrections de bugs gratuites inclus.' }
        ]
    },

    features: {
        section_label: 'Pourquoi nous choisir',
        section_title: 'Pourquoi travailler avec nous',
        section_subtitle: 'Découvrez ce qui distingue notre approche pour les entreprises',

        expertise: {
            title: 'Une expertise du marché éprouvée',
            text: 'Une compréhension approfondie des défis des entreprises et de la dynamique du marché. Nous construisons des solutions qui donnent de vrais résultats.'
        },
        experience: {
            title: 'Plus de 20 ans d\'expérience',
            text: 'Avec plus de vingt ans dans le développement logiciel, nous apportons une expertise et un regard inégalés à chaque projet. Nous savons ce qui fonctionne.'
        },
        support: {
            title: 'Accompagnement après le lancement',
            text: '3 mois de corrections de bugs et de mises à jour gratuites. Des plans de maintenance optionnels pour la tranquillité à long terme. Nous assumons notre travail.'
        }
    },

    cta: {
        section_label: 'Travaillons ensemble',
        section_title: 'Prêt à transformer votre entreprise ?',
        text: 'Découvrez nos services, consultez nos réalisations ou contactez-nous pour parler de votre projet. La première consultation est toujours gratuite.'
    },

    about: {
        hero_subtitle: 'À propos de nous',
        hero_title: 'Qui nous sommes',
        hero_description: 'Nous sommes spécialisés dans la création de solutions logicielles intelligentes qui résolvent de vrais problèmes d\'entreprise.',

        story_title: 'Notre histoire',
        story_text1: 'Forts de plusieurs années d\'expérience en développement web, nous avons travaillé avec des entreprises pour créer des solutions logicielles intelligentes. Notre parcours est né d\'une passion pour résoudre des problèmes grâce à la technologie, et nous avons depuis aidé de nombreux clients à transformer leurs activités grâce à des applications web sur mesure.',
        story_text2: 'Nous sommes spécialisés dans les solutions d\'entreprise intelligentes, dont l\'automatisation, les solutions d\'IA et les solutions communautaires participatives. Que vous ayez besoin d\'un simple site web ou d\'une application métier complexe, nous pouvons aider à donner vie à votre vision',

        expertise_title: 'Notre expertise',
        expertise_items: {
            business_automation: 'Automatisation des processus',
            ai_solutions: 'Solutions d\'IA',
            community_solutions: 'Solutions communautaires participatives',
            consultancy: 'Conseil'
        },
        expertise_note: 'Vous ne savez pas laquelle convient à votre entreprise ? Nous vous aiderons à le déterminer lors d\'une première consultation gratuite.',

        cta_text: 'Vous avez un projet en tête ? Voyons comment nous pouvons aider votre entreprise à se développer grâce à des logiciels intelligents.'
    },

    services: {
        hero_subtitle: 'Services',
        hero_title: 'Comment nous pouvons aider votre entreprise',
        hero_description: 'Nous créons des solutions logicielles intelligentes adaptées aux besoins de votre entreprise.',

        cta_text: 'Voyons quel service convient à votre entreprise. La première consultation est toujours gratuite.',
        cta_button: 'Obtenir une consultation gratuite',

        consultancy: {
            label: 'Conseil',
            title: 'Des conseils avant de construire',
            text: 'Un bon logiciel commence par la bonne question. Nous vous aidons à comprendre ce dont vous avez réellement besoin, ce que cela demandera et ce qu\'il faut laisser de côté, que vous finissiez ou non par travailler avec nous pour le construire.',
            points: [
                { title: 'Découverte et cadrage', text: 'Nous transformons une idée vague ou un point de douleur de votre entreprise en un plan clair et priorisé.' },
                { title: 'Audit technique', text: 'Un second avis honnête sur vos systèmes existants, votre architecture ou un devis que vous avez reçu.' },
                { title: 'Feuille de route IA et automatisation', text: 'Où l\'IA et l\'automatisation vous feront vraiment gagner du temps, et où elles n\'en feront pas gagner.' },
                { title: 'Accompagnement concret', text: 'Un soutien continu pour votre équipe pendant la construction, avec des conseils pratiques plutôt que des présentations.' }
            ]
        },

        items: {
            business_automation: {
                title: 'Automatisation des processus',
                description: 'Rationalisez vos opérations grâce à des solutions d\'automatisation intelligentes. Gagnez en efficacité et réduisez le travail manuel avec des flux de travail intelligents.'
            },
            ai_solutions: {
                title: 'Solutions d\'IA',
                description: 'Exploitez la puissance de l\'intelligence artificielle pour transformer votre entreprise. Des solutions intelligentes qui apprennent, s\'adaptent et donnent des résultats.',
                scan: "Découvrez où l'IA est rentable grâce à un scan, validez-la en pilote, puis faites-la construire, exploiter et mesurer. Voir notre méthode."
            },
            community_systems: {
                title: 'Solutions communautaires participatives',
                description: 'Créez des communautés connectées grâce à des plateformes numériques participatives. Engagez les utilisateurs, partagez l\'information et collaborez efficacement.'
            },
            consultancy: {
                title: 'Conseil',
                description: 'Vous ne savez pas par où commencer ? Obtenez des conseils pratiques et indépendants sur vos logiciels, vos processus et là où l\'IA et l\'automatisation peuvent aider, avant de vous engager dans quoi que ce soit.'
            }
        }
    },

    portfolio: {
        hero_subtitle: 'Réalisations',
        hero_title: 'Notre travail',
        hero_description: 'Découvrez les plateformes que nous avons créées et que nous exploitons : un générateur de prompts d\'IA pour entrepreneurs, un guide d\'orientation dans les aéroports, un assistant de recherche d\'emploi et un outil de suivi d\'entreprise.',

        cta_text: 'Voyons comment créer une solution intelligente pour votre entreprise ou votre communauté.',

        wip: {
            label: 'En préparation',
            title: 'Sur quoi nous travaillons',
            subtitle: 'De nouvelles plateformes en cours de construction. Les premières versions sont déjà en ligne.',
            status: 'En développement',
            title_item: 'MyCanopy',
            tagline: 'Des annonces immobilières dans tout l\'Ouganda, sur une carte',
            description: 'MyCanopy aide à trouver des biens à louer et à vendre dans tout l\'Ouganda. Parcourez les annonces sur une carte interactive, affinez par district, ville, prix et nombre de chambres, et filtrez par appartements, maisons, terrains ou locaux commerciaux. Il est disponible en anglais et en luganda, et nous enrichissons les annonces au fur et à mesure.',
            features: [
                'Recherche rapide sur carte dans tout l\'Ouganda',
                'Filtres par lieu, prix, chambres et type de bien',
                'Annonces de location et de vente en anglais et en luganda'
            ],
            tags: ['Immobilier', 'Cartes', 'Ouganda']
        },

        items: {
            prompt_tool: {
                title: 'Prompt a Tool',
                tagline: 'Transformez une idée d\'application en prompts d\'IA prêts à l\'emploi',
                description: 'Décrivez votre idée d\'application en langage simple, choisissez une plateforme (web, iOS, Android ou les deux) et Prompt a Tool génère des prompts, rôles, agents et compétences adaptés à votre application. Il permet aux entrepreneurs non techniques de commencer à construire sans apprendre à écrire des prompts.',
                features: [
                    'Des questions guidées plutôt qu\'une page blanche',
                    'Des prompts, rôles, agents et compétences pour votre application',
                    'Disponible en 10 langues, dont le luganda et le swahili'
                ],
                tags: ['IA', 'Prompts', 'Entrepreneurs']
            },
            job_scout: {
                title: 'Job Scout',
                tagline: 'Un assistant de recherche d\'emploi qui n\'affirme que ce qui est vrai',
                description: 'Job Scout parcourt les sites d\'emploi à la recherche de postes qui correspondent à vos préférences, évalue chaque annonce par rapport à votre profil et rédige un CV et une lettre de motivation sur mesure pour celles que vous choisissez. Chaque phrase d\'un document généré est comparée à un registre de faits vous concernant, pour que rien ne soit inventé.',
                features: [
                    'Parcourt les sites d\'emploi et évalue chaque correspondance par rapport à votre profil',
                    'CV et lettres de motivation sur mesure pour les postes que vous choisissez',
                    'Chaque affirmation d\'un document est vérifiée à partir de vos propres faits'
                ],
                tags: ['IA', 'Emploi', 'Automatisation']
            },
            lore: {
                title: 'Lore',
                tagline: 'Un outil de suivi sur mesure pour votre entreprise',
                description: 'Lore surveille les processus dont une entreprise dépend et vous prévient dès que l\'un d\'eux échoue. Il est modulaire et sur mesure : notre propre configuration surveille des sites web et des serveurs, suit l\'expiration des certificats et des domaines, envoie des alertes Telegram et garde à côté des tâches, des déploiements et une base de connaissances. Une boutique, une école ou une ferme obtiendrait un assortiment différent, construit autour de ce qui compte pour elle.',
                features: [
                    'Vérifications, alertes et outils choisis pour chaque entreprise, pas un produit figé',
                    'Incidents, post-mortems et pages de statut publiques en option',
                    'Notre propre configuration n\'est qu\'un exemple : disponibilité, serveurs, tâches, déploiements et base de connaissances'
                ],
                tags: ['Suivi', 'Sur mesure', 'Laravel']
            },
            crowded_airport: {
                title: 'Crowded Airport',
                tagline: 'Trouvez votre chemin dans n\'importe quel aéroport du monde',
                description: 'Ne vous perdez plus jamais à l\'aéroport. Choisissez n\'importe quel aéroport sur une carte du monde interactive, touchez « Où suis-je ? » et repérez-vous, pour trouver votre chemin avant de courir vers une porte d\'embarquement.',
                features: [
                    'Choisissez parmi des aéroports du monde entier',
                    'Un simple bouton « Où suis-je ? » pour vous repérer',
                    'Construit sur les données ouvertes d\'OpenStreetMap'
                ],
                tags: ['Voyage', 'Cartes', 'Navigation']
            }
        }
    },

    contact: {
        hero_subtitle: 'Contact',
        hero_title: 'Contactez-nous',
        hero_description: 'Prêt à transformer votre entreprise grâce à des logiciels intelligents ? Commençons la conversation. Nous proposons une consultation gratuite pour discuter de vos besoins.',

        form_title: 'Formulaire de contact',
        form_description: 'Remplissez le formulaire ci-dessous et nous vous répondrons sous 24 heures.',

        connect_title: 'Restons en contact',
        location: 'Service dans le monde entier',

        success_message: 'Merci ! Nous vous répondrons sous 24 heures.'
    },

    form: {
        name: 'Nom complet',
        email: 'E-mail',
        phone: 'Téléphone',
        message: 'Message',
        required: 'Ce champ est obligatoire',
        valid_email: 'Veuillez saisir une adresse e-mail valide',
        send: 'Envoyer le message',
        sending: 'Envoi en cours...',
        error_sending: 'Erreur lors de l\'envoi du message. Veuillez réessayer.'
    },

    contact_info: {
        email: 'E-mail',
        whatsapp: 'WhatsApp',
        location: 'Service dans le monde entier',
        linkedin: 'LinkedIn',
        github: 'GitHub'
    },

    blog: {
        hero_subtitle: 'Blog',
        hero_title: 'Idées et ressources',
        hero_description: 'Des idées et conseils concrets pour aider les entreprises à tirer parti de la technologie pour croître et réussir.',

        available_articles: 'Articles disponibles',
        view_all: 'Voir tous les articles',
        read_more: 'Lire la suite',
        article_not_found: 'Article introuvable',
        article_not_found_message: 'Cet article n\'existe pas ou l\'URL est peut-être incorrecte. Vérifiez l\'URL ou parcourez nos articles disponibles.',
        back_to_blog: 'Retour au blog',
        available_articles_description: 'Parcourez notre collection d\'articles sur le développement logiciel, les solutions d\'entreprise et les idées autour de la technologie.',

        cta: {
            label: 'Restez informé',
            title: 'Envie d\'en savoir plus ?',
            cta_text: 'Abonnez-vous à notre newsletter pour recevoir régulièrement des nouvelles sur les tendances technologiques et les solutions d\'entreprise.',
            subscribe: 'S\'abonner'
        },

        categories: {
            warehouse_management: 'Gestion d\'entrepôt',
            business_integration: 'Intégration d\'entreprise',
            technology: 'Technologie',
            business_solutions: 'Solutions d\'entreprise',
            user_experience: 'Expérience utilisateur',
            business: 'Entreprise'
        },

        posts: {
            wms_signs: {
                title: '5 signes que votre exploitation agricole a besoin d\'un système de gestion d\'entrepôt',
                excerpt: 'Perdez-vous de l\'argent à cause d\'un mauvais suivi des stocks ? Découvrez les signes d\'alerte et comment un WMS peut aider votre exploitation à réduire le gaspillage et à augmenter ses profits.'
            },
            business_integration: {
                title: 'Comment l\'intégration de systèmes peut transformer votre entreprise',
                excerpt: 'Découvrez les avantages de relier vos systèmes et vos outils pour une meilleure efficacité.'
            },
            modern_apps: {
                title: 'L\'avenir des applications métier',
                excerpt: 'Découvrez pourquoi les applications web modernes deviennent essentielles à une croissance d\'entreprise évolutive.'
            },
            smart_software: {
                title: 'Pourquoi les logiciels intelligents conviennent parfaitement aux entreprises',
                excerpt: 'Découvrez comment des applications métier intelligentes peuvent aider votre entreprise à se développer.'
            },
            ux_design: {
                title: 'Créer des applications métier conviviales',
                excerpt: 'Un guide pour créer des interfaces intuitives pour vos applications métier.'
            },
            software_roi: {
                title: 'Le retour sur investissement des logiciels intelligents : en vaut-il la peine ?',
                excerpt: 'Comprendre le retour sur investissement du développement de logiciels intelligents pour votre entreprise.'
            }
        }
    },

    footer: {
        tagline: 'Des solutions logicielles intelligentes pour les entreprises',
        copyright: 'Tous droits réservés.'
    },

    visuals: {
        rent: 'Location',
        sale: 'Vente',
        land: 'Terrain',
        job: {
            tagline: 'Trouve les emplois qui vous conviennent, écrit le CV',
            found: 'Emplois trouvés pour vous',
            match: 'Score',
            cv: 'CV sur mesure',
            verified: 'Chaque affirmation vérifiée',
            r1: 'Développeur backend',
            r2: 'Ingénieur full-stack',
            r3: 'Développeur Laravel'
        },
        lore: {
            tagline: 'Construit autour de votre entreprise',
            pick: 'Choisissez ce dont vous avez besoin',
            uptime: 'Disponibilité',
            stock: 'Niveaux de stock',
            payments: 'Paiements',
            renewals: 'Renouvellements',
            deliveries: 'Livraisons',
            status: 'Page de statut',
            setup: 'Votre configuration, vos alertes',
            tailored: 'Sur mesure pour chaque entreprise'
        }
    },

    languages: {
        en: 'English',
        fr: 'Français',
        es: 'Español',
        pt: 'Português'
    }
}
