import os

def generate_image_md(folder_path):
    image_md = ""
    for filename in os.listdir(folder_path):
        if filename.endswith(".png") or filename.endswith(".jpg"):
            image_path = os.path.join(folder_path, filename)
            image_md += f"![Image {filename}](./{image_path})\n"
    return image_md

folder_path = "4th Sem PW2\CarSalesService\project-pics"
all_images_md = generate_image_md(folder_path)

with open("README.md", "a") as readme_file:
    readme_file.write("\n## Images from Folder\n")
    readme_file.write(all_images_md)
