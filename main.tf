# terraform {
#   required_providers {
#     transip = {
#       source  = "aequitas/transip"
#       version = "0.1.22"
#     }
#   }

#   backend "http" {
#   }
# }

data "transip_domain" "apex-migrations" {
  name = "apex-migrations.net"
}

resource "transip_dns_record" "cloud" {
  domain  = data.transip_domain.apex-migrations.id
  name    = var.cloud
  expire  = 300
  type    = "CNAME"
  content = var.home
}

resource "transip_dns_record" "nextcloud" {
  domain  = data.transip_domain.apex-migrations.id
  name    = var.nextcloud
  expire  = 300
  type    = "CNAME"
  content = var.home
}

resource "transip_dns_record" "nexclouddb" {
  domain  = data.transip_domain.apex-migrations.id
  name    = var.nextclouddb
  expire  = 300
  type    = "CNAME"
  content = var.home
}