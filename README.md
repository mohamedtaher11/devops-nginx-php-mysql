# DevOps Nginx + PHP-FPM + MySQL Stack

[![Docker Pulls](https://img.shields.io/docker/pulls/mhmedtaher1/portfolio-php)](https://hub.docker.com/r/mhmedtaher1/portfolio-php)
[![Docker Image Size](https://img.shields.io/docker/image-size/mhmedtaher1/portfolio-php)](https://hub.docker.com/r/mhmedtaher1/portfolio-php)

Production-ready PHP application using Docker Multi-Stage Build with Nginx, PHP-FPM 8.2, MySQL 8.0, and phpMyAdmin.

## 🚀 Features
- **Multi-Stage Dockerfile**: Optimized image size with builder pattern
- **HEALTHCHECK**: Built-in container health monitoring
- **Dev/Prod Separation**: `docker-compose.override.yml` for local development with live reload
- **phpMyAdmin**: Database management UI on port 8082
- **Persistent Storage**: MySQL data with named Docker volumes
- **Security**: Non-root user, .dockerignore, production-ready configs

## 🛠️ Tech Stack
- **PHP**: 8.2-FPM Alpine
- **Web Server**: Nginx Alpine  
- **Database**: MySQL 8.0
- **Orchestration**: Docker & Docker Compose

## 📦 Quick Start

### Production
```bash
docker compose -f docker-compose.yml up -d
