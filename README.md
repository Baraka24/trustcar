# TrustCar Auto

A static website built with [Cecil](https://cecil.app/) for TrustCar Auto. It presents the import process and a gallery of delivered vehicles hosted on Cloudinary.

## Run locally

Install PHP 8.3 or later with the `fileinfo`, `gd`, and `mbstring` extensions, and [download Cecil](https://cecil.app/documentation/getting-started/installation/) as `cecil.phar` in this directory. Then run:

```powershell
php cecil.phar serve
```

Open the address printed by Cecil. To publish, run `php cecil.phar build` and deploy the contents of `_site` to a static web host. Set `baseurl` in `cecil.yml` to the final website URL before publishing.

## Deploy to GitHub Pages

Push the project to a GitHub repository, then open **Settings → Pages** and select **GitHub Actions** as the publishing source. The workflow at `.github\workflows\build-and-deploy.yml` builds and deploys the site after each push to `main` or `master`; it can also be started from the **Actions** tab using **Run workflow**. The workflow gets the correct base URL from GitHub Pages, including the repository path for a project site.

Monitor the run in **Actions** and open the URL shown under **Settings → Pages** after deployment. The repository and plan must be eligible for GitHub Pages. Site content, including photos and contact details, will be public.

## Languages

The site is available in English at the root and French at `fr\`. Visitors can switch languages in the header. French interface translations are maintained in `translations\messages.fr_FR.yaml`. After editing translations, run `php cecil.phar build --clear-cache` to ensure Cecil uses the updated text.

## Contact details

Add your real email address and/or WhatsApp number to `data\business.yml`. The WhatsApp number must include the country code; an optional `+`, spaces, hyphens, and parentheses are removed from the link. Empty fields are hidden. The WhatsApp link opens in a new tab. Rebuild the site after editing.

## Delivered vehicle photos

1. Upload each photo to your Cloudinary Media Library using your Cloudinary account. Make sure you have permission to publish it and that its delivery type is public (`upload`).
2. Set `cloud_name` in `data\vehicles.yml` to your Cloudinary cloud name.
3. Replace `vehicles: []` with entries like the following, using the image's **public ID** (including its folder, but without a file extension):

   ```yaml
   vehicles:
     - title: "Toyota RAV4"
       public_id: "delivered/toyota-rav4"
       alt: "Toyota RAV4 delivered to its owner"
       description: "Delivered in Butembo"
       title_fr: "Toyota RAV4"
       alt_fr: "Toyota RAV4 livré à son propriétaire"
       description_fr: "Livré à Butembo"
   ```

4. Rebuild and deploy the website. Cloudinary serves optimized card images. Clicking a photo opens the original, uncropped image in a new tab.

For French, add `title_fr`, `alt_fr`, and `description_fr` to each vehicle. If omitted, the title is reused as the French title and image description; an untranslated description is not shown on the French page.

The gallery is intentionally empty until real deliveries are added. This static site does not upload images or automatically list the Cloudinary library; publishing a photo requires the manual steps above. Never put your Cloudinary API secret in this repository or in the browser.
