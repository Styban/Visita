import axios from 'axios';
import './bootstrap';

async function populateTourguideViews() {
    try{
        const container = document.querySelector('.row.row-cols-1.row-cols-md-3.g-4.py-5');
        container.innerHTML = '';

        const response = await axios.get('/api/tourguides');

        response.data.forEach((tourguide) => {
            const col = document.createElement('div');
            col.className = 'col';

            const card = document.createElement('div');
            card.className = 'card';

            const img = document.createElement('img');
            img.src = `/images/${tourguide.profile_photo_url}`;  // Ensure the image path is correct
            img.className = 'card-img-top';
            img.alt = '...';

            const cardBody = document.createElement('div');
            cardBody.className = 'card-body';

            const cardTitle = document.createElement('h5');
            cardTitle.className = 'card-title';
            cardTitle.innerText = tourguide.name;  // Use the appropriate property from the tourguide data

            const cardText = document.createElement('p');
            cardText.className = 'card-text';
            cardText.innerText = 'Some quick example text to build on the card title and make up the bulk of the card\'s content.'; // Customize this as needed

            const cardButton = document.createElement('a');
            cardButton.href = '#';  // Customize the link as needed
            cardButton.className = 'btn btn-primary';
            cardButton.innerText = 'See More';

            cardBody.appendChild(cardTitle);
            cardBody.appendChild(cardText);
            cardBody.appendChild(cardButton);

            card.appendChild(img);
            card.appendChild(cardBody);

            col.appendChild(card);

            container.appendChild(col);
        });
    } catch (error) {
        console.error("Error fetching guides:", error);
    }
}

window.onload = () => {
    populateTourguideViews();
}