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