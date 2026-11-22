variable "transip_account_name" {
  type        = string
  description = "The name of the Transip account"
}

variable "transip_private_key" {
  type        = string
  description = "The private key for the Transip account"
  sensitive   = true
}

variable "transip_access_token" {
  type        = string
  description = "The access token for the Transip account"
  sensitive   = true
}

####### Network
variable "nextcloud" {
  type        = string
  default     = "nextcloud"
  description = "DNS Name for nextcloud"
}

####### Network
variable "cloud" {
  type        = string
  default     = "cloud"
  description = "DNS Name for nextcloud"
}

variable "nextclouddb" {
  type        = string
  default     = "nextclouddb"
  description = "DNS Name for the nextcloud DB"
}

variable "home" {
  type        = list(string)
  default     = ["apex-migrations.hopto.org."]
  description = "DDNS Record"
}