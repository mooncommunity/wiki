#!/usr/bin/bash

echo "<html><head><meta charset='utf-8'><title>Changelog</title></head><body><h1>Changelog</h1>" > ../CHANGELOG.MD


git log --pretty=format:"%h - %s (%an, %ad)" --date=short $(git rev-list --max-parents=0 HEAD)..HEAD | while read line; do
    commit_hash=$(echo $line | awk '{print $1}')
    commit_message=$(echo $line | sed "s/^.* - //")
    
    echo "<h2>Commit: $commit_message</h2>" >> ../CHANGELOG.MD
    echo "<h3>Değişiklikler:</h3><ul>" >> ../CHANGELOG.MD

    if [ "$commit_hash" != "$(git rev-list --max-parents=0 HEAD)" ]; then
        previous_commit=$(git rev-parse "$commit_hash^")
        git diff --name-status $previous_commit $commit_hash | while read status file; do
            if [[ $status == "A" ]]; then
                echo "<li style='color: green;'>Eklenmiş: $file</li>" >> ../CHANGELOG.MD
            elif [[ $status == "M" ]]; then
                echo "<li style='color: blue;'>Değiştirilmiş: $file</li>" >> ../CHANGELOG.MD
            elif [[ $status == "D" ]]; then
                echo "<li style='color: red;'>Silinmiş: $file</li>" >> ../CHANGELOG.MD
            fi
        done
    fi

    echo "</ul>" >> ../CHANGELOG.MD
done
echo "</body></html>" >> ../CHANGELOG.MD

