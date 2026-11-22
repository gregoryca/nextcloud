# Nextcloud Deployment Guide

This repository contains the configuration and scripts necessary to deploy and manage a Nextcloud instance, utilizing Ansible for infrastructure setup, Docker Compose for application services, and Terraform for infrastructure orchestration.

## 🛠️ Prerequisites

Before starting, ensure you have the following tools installed:
*   Ansible
*   Docker
*   Terraform
*   Proxmox access (if using Proxmox volume mounting)

## ⚙️ Ansible Setup (Infrastructure Provisioning)

To provision the underlying infrastructure, follow these steps:

1.  **Create `ansible.cfg`**: Place this file in the `/deployments/` directory.
    ```ini
    [defaults]
    inventory = inventory
    host_key_checking = true
    ```
2.  **Create Inventory File**: Ensure an inventory file is created so Ansible knows how to connect to your infrastructure.
    ```ini
    [name group]
    server name ansible_host=ipaddress ansible_port=port

    [group name:vars]
    ```
3.  **Environment Variables**: Create a `.env` file in the root directory of your `docker-compose` file and fill in the missing details:
    ```
    MYSQL_ROOT_PASSWORD=
    MYSQL_PASSWORD=
    MYSQL_DATABASE=
    MYSQL_USER=
    MYSQL_HOST=
    REDIS_HOST_PASSWORD=
    REDIS_HOST_PASSWORD=
    ```
    *Make sure to fill in the "value" of the keys.*

## 💾 Proxmox/Nextcloud Volume Mount Configuration

If you are using a dedicated drive for Nextcloud data, follow these steps on the Proxmox host:

1.  **Search for the drive**:
    ```bash
    ls /dev/disk/by-id/
    ```
2.  **Create a new volume mount** attached to the VM (e.g., VM ID 100):
    ```bash
    qm set 100 -scsi1 /dev/disk/by-id/ata-TOSHIBA_MK3259GSXP_62QOCSJZT
    ```
3.  **Edit `/etc/fstab`** to enter a new volume mount:
    ```
    #Nextcloud data folder
    UUID=1ADEEC51DEEC272B /nextcloud-mount ntfs rw,auto,users,exec,nls=utf8,umask=003,gid=33,uid=33   0   0
    ```
4.  **Reload and Mount**:
    ```bash
    systemctl daemon-reload
    mount -a
    ```
The drive will be mounted as a SCSI drive and should be available exclusively on the VM.

## 🐳 Docker Commands

To enter the Nextcloud OCC (Online Console), use the following command:
```bash
sudo docker exec -it --user www-data nextcloud php occ
```

**Database Notes**: MySQL does not support 4-byte characters. To handle 4-byte characters (like emojis) without issues in filenames or comments, it is recommended to enable 4-byte support in MySQL.
*Fix:* https://github.com/nextcloud/documentation/issues/513

**Back-up MySQL DB**:
To backup files, use the following command:
```bash
mysqldump --single-transaction -h 192.168.2.116 -u nextcloud -p laliloe nextcloud_db > nextcloud-sqlbkp_`date +"%Y%m%d"`.bak
```

**Folder Permissions**:
*   **Change folder permission**:
    ```bash
    chown -R www-data:www-data /path/to/nextcloud-data-folder
    ```
*   **Change folder Rights**:
    ```bash
    sudo chmod -R 0770 /nextcloud-data/
    ```

**NTFS Mount Properties**:
To add the right properties to an NTFS mounted drive, use this guide: https://help.nextcloud.com/t/you-dont-have-permissions-to-upload-or-create-files-here-local-external-ntfs-3g-storage/5420/3?u=fab

## 🚀 Terraform Deployment (Infrastructure Orchestration)

To manage the Nextcloud infrastructure using Terraform, follow these steps:

1.  **Initialize Terraform:**
    ```bash
    cd /workspaces/srv/apex-migrations-framework/app-deployer-microservice/applications/nextcloud
    terraform init
    ```
2.  **Configure Variables:**
    Ensure your `nextcloud.tfvars` file contains all necessary credentials and configuration details.
3.  **Plan the Deployment:**
    Review the planned changes before applying them:
    ```bash
    terraform plan -var-file="nextcloud.tfvars"
    ```
4.  **Apply the Deployment:**
    Apply the configuration to provision the infrastructure:
    ```bash
    terraform apply -var-file="nextcloud.tfvars"
    ```
5.  **Destroy Infrastructure (Use with Caution):**
    To tear down the infrastructure managed by this configuration:
    ```bash
    terraform destroy -var-file="nextcloud.tfvars"
    ```


## Terraform Deployment
To manage the Nextcloud deployment using Terraform, you can use the following steps:

1.  **Initialize Terraform:**
    ```bash
    cd /workspaces/srv/apex-migrations-framework/app-deployer-microservice/applications/nextcloud
    terraform init
    ```
2.  **Configure Variables:**
    Ensure your `nextcloud.tfvars` file contains all necessary credentials and configuration details.
3.  **Plan the Deployment:**
    Review the planned changes before applying them:
    ```bash
    terraform plan -var-file="nextcloud.tfvars"
    ```
4.  **Apply the Deployment:**
    Apply the configuration to provision the infrastructure:
    ```bash
    terraform apply -var-file="nextcloud.tfvars"
    ```
5.  **Destroy Infrastructure (Use with Caution):**
    To tear down the infrastructure managed by this configuration:
    ```bash
    terraform destroy -var-file="nextcloud.tfvars"
    ```
