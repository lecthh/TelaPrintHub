document.addEventListener('DOMContentLoaded', () => {
    const originalAboutText = document.getElementById('about').value;
    const originalName = document.getElementById('name').innerText;
    const originalEmail = document.getElementById('email').innerText;
    const originalNumber = document.getElementById('number').innerText;

    const profilePicPreview = document.getElementById('profilePicPreview');
    const originalProfilePicSrc = profilePicPreview.src;

    const aboutTextArea = document.getElementById('about');
    const nameField = document.getElementById('name');
    const emailField = document.getElementById('email');
    const numberField = document.getElementById('number');

    const aboutHidden = document.getElementById('about_hidden');
    const nameHidden = document.getElementById('name_hidden');
    const emailHidden = document.getElementById('email_hidden');
    const numberHidden = document.getElementById('contact_details');

    const discardButton = document.getElementById('discardButton');
    const updateButton = document.getElementById('updateButton');

    const profilePicInput = document.getElementById('profile_pic_update');
    const imagesInput = document.getElementById('images');
    const previewImagesContainer = document.getElementById('previewImages');

    const originalGalleryImages = Array.from(previewImagesContainer.querySelectorAll('img')).map(img => img.src);

    discardButton.addEventListener('click', () => {
        aboutTextArea.value = originalAboutText;
        nameField.innerText = originalName;
        emailField.innerText = originalEmail;
        numberField.innerText = originalNumber;

        aboutHidden.value = originalAboutText;
        nameHidden.value = originalName;
        emailHidden.value = originalEmail;
        numberHidden.value = originalNumber;

        profilePicPreview.src = originalProfilePicSrc;
        profilePicInput.value = '';
        imagesInput.value = '';

        previewImagesContainer.innerHTML = '';
        originalGalleryImages.forEach(src => {
            const img = document.createElement('img');
            img.src = src;
            img.classList.add('w-[200px]', 'h-[190px]', 'border', 'border-kBlack', 'bg-kViolet', 'object-cover', 'cursor-pointer');
            img.onclick = () => openModal(src);
            const wrapper = document.createElement('div');
            wrapper.classList.add('w-[200px]', 'h-[190px]', 'border', 'border-kBlack', 'bg-kViolet', 'overflow-hidden');
            wrapper.appendChild(img);
            previewImagesContainer.appendChild(wrapper);
        });
    });

    updateButton.addEventListener('click', (e) => {
        aboutHidden.value = aboutTextArea.value;
        nameHidden.value = nameField.innerText;
        emailHidden.value = emailField.innerText;
        numberHidden.value = numberField.innerText;
    });

    if (profilePicInput && profilePicPreview) {
        profilePicInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    profilePicPreview.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    }

    if (imagesInput && previewImagesContainer) {
        imagesInput.addEventListener('change', function(event) {
            const files = event.target.files;
            if (files.length > 0) {
                for (const file of files) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.classList.add('w-[200px]', 'h-[190px]', 'border', 'border-kBlack', 'bg-kViolet', 'object-cover');
                        const wrapper = document.createElement('div');
                        wrapper.classList.add('w-[200px]', 'h-[190px]', 'border', 'border-kBlack', 'bg-kViolet', 'overflow-hidden');
                        wrapper.appendChild(img);
                        previewImagesContainer.appendChild(wrapper);
                    };
                    reader.readAsDataURL(file);
                }
            }
        });
    }
});