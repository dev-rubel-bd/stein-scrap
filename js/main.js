/* Front-end Interactivity for STEIN SCRAP, INC. */

document.addEventListener('DOMContentLoaded', () => {
    // ---------------------------------
    // 1. Mobile Drawer Navigation
    // ---------------------------------
    const menuBtn = document.querySelector('.mobile-menu-btn');
    const drawer = document.querySelector('.mobile-drawer');
    const overlay = document.querySelector('.mobile-drawer-overlay');
    const closeBtn = document.querySelector('.mobile-drawer-close');

    if (menuBtn && drawer && overlay) {
        const toggleDrawer = (state) => {
            drawer.classList.toggle('active', state);
            overlay.classList.toggle('active', state);
            document.body.style.overflow = state ? 'hidden' : '';
        };

        menuBtn.addEventListener('click', () => toggleDrawer(true));
        closeBtn.addEventListener('click', () => toggleDrawer(false));
        overlay.addEventListener('click', () => toggleDrawer(false));
    }

    // ---------------------------------
    // 2. Sticky Header Effects
    // ---------------------------------
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.style.padding = '0.6rem 0';
            header.style.background = 'rgba(11, 13, 15, 0.92)';
        } else {
            header.style.padding = '1rem 0';
            header.style.background = 'var(--color-glass-bg)';
        }
    });

    // ---------------------------------
    // 3. Scrap Price Estimator Calculator
    // ---------------------------------
    const calcMaterialSelect = document.getElementById('calc-material');
    const calcWeightInput = document.getElementById('calc-weight');
    const calcResultVal = document.getElementById('calc-result-val');

    // Live price database (in USD per lb) matching includes/lang.php
    const prices = {
        'copper_cathode': 3.85,
        'copper_wire': 3.70,
        'iron_scrap': 0.12,
        'aluminum_ubc': 0.70,
        'aluminum_wire': 0.85,
        'aluminum_extrusion': 0.90,
        'aluminum_ingot': 1.15,
        'aluminum_wheel': 0.95,
        'cpu_scrap': 12.50,
        'occ_paper': 0.05,
        'white_paper': 0.08,
        'yellow_brass': 2.45,
        'pet_plastic': 0.15,
        'ldpe_film': 0.18
    };

    if (calcMaterialSelect && calcWeightInput && calcResultVal) {
        const calculateEstimate = () => {
            const material = calcMaterialSelect.value;
            const weight = parseFloat(calcWeightInput.value) || 0;
            const pricePerLb = prices[material] || 0;
            const estimate = weight * pricePerLb;

            // Animate number updates
            const formatted = new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: 'USD'
            }).format(estimate);

            calcResultVal.textContent = formatted;
        };

        calcMaterialSelect.addEventListener('change', calculateEstimate);
        calcWeightInput.addEventListener('input', calculateEstimate);
    }

    // ---------------------------------
    // 4. Ocean Container Size Visualizer
    // ---------------------------------
    const containerTabs = document.querySelectorAll('.cargo-container-tab');
    const containerGraphics = document.querySelector('.cargo-container-graphics');
    const containerTitle = document.getElementById('cargo-container-title');
    const containerDim = document.getElementById('cargo-container-dim');
    const containerCap = document.getElementById('cargo-container-cap');
    const containerUse = document.getElementById('cargo-container-use');

    const containerData = {
        '10': {
            title: '20ft Standard Ocean Container',
            dim: '19.4ft Long x 7.8ft Wide x 7.9ft High',
            cap: '47,900 lbs / 21.7 Metric Tons (Volume: 1,172 cu ft)',
            use: 'Heavy materials: copper cathodes, wire coils, lead ingots, and heavy melting steel scraps.'
        },
        '20': {
            title: '40ft Standard Ocean Container',
            dim: '39.5ft Long x 7.8ft Wide x 7.9ft High',
            cap: '58,800 lbs / 26.7 Metric Tons (Volume: 2,385 cu ft)',
            use: 'Standard materials: aluminum extrusion, UBC scraps, radiators, and yellow brass.'
        },
        '30': {
            title: '40ft High-Cube Ocean Container',
            dim: '39.5ft Long x 7.8ft Wide x 8.9ft High',
            cap: '63,000 lbs / 28.5 Metric Tons (Volume: 2,694 cu ft)',
            use: 'Volumetric materials: OCC waste paper bales, shredded papers, PET bottles, and LDPE/LLDPE film scraps.'
        }
    };

    if (containerTabs.length > 0 && containerGraphics) {
        containerTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Set active tab
                containerTabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');

                // Update visual size and data
                const size = tab.getAttribute('data-size');
                containerGraphics.setAttribute('data-size', size);

                const data = containerData[size];
                if (data) {
                    containerTitle.textContent = data.title;
                    containerDim.textContent = data.dim;
                    containerCap.textContent = data.cap;
                    containerUse.textContent = data.use;
                }
            });
        });
    }

    // ---------------------------------
    // 5. Drag & Drop File Upload Previews
    // ---------------------------------
    const fileZone = document.getElementById('file-zone');
    const fileInput = document.getElementById('file-input');
    const thumbnailsContainer = document.getElementById('thumbnails');

    if (fileZone && fileInput && thumbnailsContainer) {
        // Handle drag events
        ['dragenter', 'dragover'].forEach(eventName => {
            fileZone.addEventListener(eventName, (e) => {
                e.preventDefault();
                fileZone.classList.add('dragover');
            }, false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            fileZone.addEventListener(eventName, (e) => {
                e.preventDefault();
                fileZone.classList.remove('dragover');
            }, false);
        });

        // Handle file drop
        fileZone.addEventListener('drop', (e) => {
            const dt = e.dataTransfer;
            const files = dt.files;
            handleFiles(files);
        });

        // Handle file selection via explorer
        fileInput.addEventListener('change', (e) => {
            const files = e.target.files;
            handleFiles(files);
        });

        const handleFiles = (files) => {
            thumbnailsContainer.innerHTML = '';
            Array.from(files).forEach(file => {
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        const wrapper = document.createElement('div');
                        wrapper.className = 'thumbnail-wrapper';
                        
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.alt = file.name;
                        
                        wrapper.appendChild(img);
                        thumbnailsContainer.appendChild(wrapper);
                    };
                    reader.readAsDataURL(file);
                }
            });
        };
    }

    // ---------------------------------
    // 6. Products Page Filtering
    // ---------------------------------
    const filterBtns = document.querySelectorAll('.filter-btn');
    const productCards = document.querySelectorAll('.product-card');

    if (filterBtns.length > 0 && productCards.length > 0) {
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Set active filter button
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const filterValue = btn.getAttribute('data-filter');

                productCards.forEach(card => {
                    const cardCategory = card.getAttribute('data-category');
                    if (filterValue === 'all' || cardCategory === filterValue) {
                        card.style.display = 'flex';
                        // Add slight fade in animation
                        card.style.opacity = '0';
                        setTimeout(() => {
                            card.style.opacity = '1';
                        }, 50);
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    }
});
