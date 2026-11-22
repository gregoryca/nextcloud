terraform {
  required_providers {
    transip = {
      source  = "aequitas/transip"
      version = "~> 0.1.23"
    }
  }

  backend "http" {
    lock_address   = "https://terraform-backend.apex-migrations.net/s/nextcloud/"
    unlock_address = "https://terraform-backend.apex-migrations.net/s/nextcloud/"
    address        = "https://terraform-backend.apex-migrations.net/s/nextcloud/"
  }
}

provider "transip" {
  account_name = var.transip_account_name
  access_token = var.transip_access_token
}