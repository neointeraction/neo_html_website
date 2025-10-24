import json
import os

def update_clients_data():
    # Read image dimensions
    with open('image_dimensions.json', 'r') as f:
        image_dimensions = json.load(f)

    # Read clients data
    with open('data/clients_data.json', 'r') as f:
        clients_data = json.load(f)

    # Update clients data with dimensions
    for client in clients_data:
        image_path = client.get('image')
        if image_path:
            filename = os.path.basename(image_path)
            if filename in image_dimensions:
                client['width'] = image_dimensions[filename]['width']
                client['height'] = image_dimensions[filename]['height']

    # Write updated clients data
    with open('data/clients_data.json', 'w') as f:
        json.dump(clients_data, f, indent=4)

    print("clients_data.json updated successfully with image dimensions.")

if __name__ == "__main__":
    update_clients_data()
