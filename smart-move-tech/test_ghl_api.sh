#!/usr/bin/env bash
set -euo pipefail

if [ -f .env ]; then
  set -a
  source .env
  set +a
fi

: "${GHL_API_KEY:?Missing GHL_API_KEY}"
: "${GHL_BASE_URL:=https://services.leadconnectorhq.com}"

curl -sS "$GHL_BASE_URL/locations/search?limit=5" \
  -H "Authorization: Bearer $GHL_API_KEY" \
  -H "Version: 2021-07-28" \
  -H "Content-Type: application/json"

echo
